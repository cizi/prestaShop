<?php

/*
 * by adam budik
 */

class ManequineControllerCore extends FrontController {

    public $php_self = 'manequine';
    protected $id_product;
    protected $id_product_attribute;
    protected $id_address_delivery;
    protected $customization_id;
    protected $qty;
    public $ssl = true;
    protected $ajax_refresh = true;
    protected $attributeSizePicker = false;

    /**
     * This is not a public page, so the canonical redirection is disabled
     */
    public function canonicalRedirection($canonicalURL = '') {
        
    }

    /**
     * Initialize cart controller
     * @see FrontController::init()
     */
    public function init() {
        parent::init();        // Send noindex to avoid ghost carts by bots
        header("X-Robots-Tag: noindex, nofollow", true);
        // Get page main parameters
        $this->id_product = (int) Tools::getValue('id_product', null);
        $this->id_product_attribute = (int) Tools::getValue('id_product_attribute', Tools::getValue('ipa'));
        $this->customization_id = (int) Tools::getValue('id_customization');
        $this->qty = abs(Tools::getValue('qty', 1));
        $this->id_address_delivery = (int) Tools::getValue('id_address_delivery');
    }

    public function postProcess() {
        // Update the cart ONLY if $this->cookies are available, in order to avoid ghost carts created by bots
        if ($this->context->cookie->exists() && !$this->errors && !($this->context->customer->isLogged() && !$this->isTokenValid())) {
            if (Tools::getIsset('add') || Tools::getIsset('update'))
                $this->processChangeProductInManequine();
            elseif (Tools::getIsset('delete'))
                $this->processDeleteProductInCart();
            elseif (Tools::getIsset('get')) {
                $this->processGetProductInManequine();
            }
            if (!$this->errors && !$this->ajax) {
                
                $queryString = Tools::safeOutput(Tools::getValue('query', null));
                if ($queryString && !Configuration::get('PS_CART_REDIRECT'))
                    Tools::redirect('index.php?controller=search&search=' . $queryString);

                // Redirect to previous page
                if (isset($_SERVER['HTTP_REFERER'])) {
                    preg_match('!http(s?)://(.*)/(.*)!', $_SERVER['HTTP_REFERER'], $regs);
                    if (isset($regs[3]) && !Configuration::get('PS_CART_REDIRECT'))
                        Tools::redirect($_SERVER['HTTP_REFERER']);
                }

                Tools::redirect('index.php?controller=order&' . (isset($this->id_product) ? 'ipa=' . $this->id_product : ''));
            }
        }
        elseif (!$this->isTokenValid())
            Tools::redirect('index.php');
    }

    /**
     * This process delete a product from the cart
     */
    protected function processDeleteProductInCart() {
        if ($this->context->cart->deleteProduct($this->id_product, $this->id_product_attribute, $this->customization_id, $this->id_address_delivery)) {
            if (!Cart::getNbProducts((int) ($this->context->cart->id))) {
                $this->context->cart->setDeliveryOption(null);
                $this->context->cart->gift = 0;
                $this->context->cart->gift_message = '';
                $this->context->cart->update();
            }
        }
        $removed = CartRule::autoRemoveFromCart();
        CartRule::autoAddToCart();
        if ((int) Tools::getValue('allow_refresh'))
            $this->ajax_refresh = true;
    }

    protected function processGetProductInManequine() {
    }

    protected function processAllowSeperatedPackage() {
        if (!Configuration::get('PS_SHIP_WHEN_AVAILABLE'))
            return;

        if (Tools::getValue('value') === false)
            die('{"error":true, "error_message": "No value setted"}');

        $this->context->cart->allow_seperated_package = (boolean) Tools::getValue('value');
        $this->context->cart->update();
        die('{"error":false}');
    }

    /**
     * This process add or update a product in the cart
     */
    protected function processChangeProductInManequine() {
        $mode = (Tools::getIsset('update') && $this->id_product) ? 'update' : 'add';
        if (!$this->id_product)
            $this->errors[] = Tools::displayError('Product not found', !Tools::getValue('ajax'));

        $product = new Product($this->id_product, true, $this->context->language->id);
        if (!$product->id || !$product->active) {
            $this->errors[] = Tools::displayError('This product is no longer available.', !Tools::getValue('ajax'));
            return;
        }
        if($product->getProductAttributesIds($this->id_product) && $this->id_product_attribute == 'null'){
            $this->attributeSizePicker = true;
        }
        
        // If no errors, process product addition
        if (!$this->errors && $mode == 'add') {
            // Add cart if no cart found
            if (!$this->context->cart->id) {
                if (Context::getContext()->cookie->id_guest) {
                    $guest = new Guest(Context::getContext()->cookie->id_guest);
                    $this->context->cart->mobile_theme = $guest->mobile_theme;
                }
                $this->context->cart->addManequine();
                if ($this->context->cart->id)
                    $this->context->cookie->id_manequine = (int) $this->context->cart->id;
            }

            // Check customizable fields
            if (!$product->hasAllRequiredCustomizableFields() && !$this->customization_id)
                $this->errors[] = Tools::displayError('Please fill in all of the required fields, and then save your customizations.', !Tools::getValue('ajax'));

            if (!$this->errors) {
                $cart_rules = $this->context->cart->getCartRules();
                $update_quantity = $this->context->cart->updateQtyManquine($this->qty, $this->id_product, $this->id_product_attribute, $this->customization_id, Tools::getValue('op', 'up'), $this->id_address_delivery);
                if ((int) Tools::getValue('allow_refresh')) {
                    // If the cart rules has changed, we need to refresh the whole cart
                    $cart_rules2 = $this->context->cart->getCartRules();
                    if (count($cart_rules2) != count($cart_rules))
                        $this->ajax_refresh = true;
                    else {
                        $rule_list = array();
                        foreach ($cart_rules2 as $rule)
                            $rule_list[] = $rule['id_cart_rule'];
                        foreach ($cart_rules as $rule)
                            if (!in_array($rule['id_cart_rule'], $rule_list)) {
                                $this->ajax_refresh = true;
                                break;
                            }
                    }
                }
            }
        }
        if ((int) Tools::getValue('allow_refresh'))
            $this->ajax_refresh = true;
    }

    /**
     * @see FrontController::initContent()
     */
    public function initContent() {
        $this->setTemplate(_PS_THEME_DIR_ . 'errors.tpl');
        if (!$this->ajax)
            parent::initContent();
    }

    /**
     * Display ajax content (this function is called instead of classic display, in ajax mode)
     */
    public function displayAjax() {
        if ($this->errors)
            die(Tools::jsonEncode(array('hasError' => true, 'errors' => $this->errors)));
        if ($this->ajax_refresh && $this->attributeSizePicker)
            die(Tools::jsonEncode(array('refresh' => true,'attributeSizePicker' => true)));
        if ($this->ajax_refresh)
            die(Tools::jsonEncode(array('refresh' => true)));
        // write cookie if can't on destruct
        $this->context->cookie->write();

        if (Tools::getIsset('summary')) {
            $result = array();
            if (Configuration::get('PS_ORDER_PROCESS_TYPE') == 1) {
                $groups = (Validate::isLoadedObject($this->context->customer)) ? $this->context->customer->getGroups() : array(1);
                if ($this->context->cart->id_address_delivery)
                    $deliveryAddress = new Address($this->context->cart->id_address_delivery);
                $id_country = (isset($deliveryAddress) && $deliveryAddress->id) ? $deliveryAddress->id_country : Configuration::get('PS_COUNTRY_DEFAULT');

                Cart::addExtraCarriers($result);
            }
            $result['summary'] = $this->context->cart->getSummaryDetails(null, true);
            $result['customizedDatas'] = Product::getAllCustomizedDatas($this->context->cart->id, null, true);
            $result['HOOK_SHOPPING_CART'] = Hook::exec('displayShoppingCartFooter', $result['summary']);
            $result['HOOK_SHOPPING_CART_EXTRA'] = Hook::exec('displayShoppingCart', $result['summary']);

            foreach ($result['summary']['products'] as $key => &$product) {
                $product['quantity_without_customization'] = $product['quantity'];
                if ($result['customizedDatas'] && isset($result['customizedDatas'][(int) $product['id_product']][(int) $product['id_product_attribute']])) {
                    foreach ($result['customizedDatas'][(int) $product['id_product']][(int) $product['id_product_attribute']] as $addresses)
                        foreach ($addresses as $customization)
                            $product['quantity_without_customization'] -= (int) $customization['quantity'];
                }
                $product['price_without_quantity_discount'] = Product::getPriceStatic(
                                $product['id_product'], !Product::getTaxCalculationMethod(), $product['id_product_attribute'], 6, null, false, false
                );
            }
            if ($result['customizedDatas'])
                Product::addCustomizationPrice($result['summary']['products'], $result['customizedDatas']);

            Hook::exec('actionCartListOverride', array('summary' => $result, 'json' => &$json));
            die(Tools::jsonEncode(array_merge($result, (array) Tools::jsonDecode($json, true))));
        }
        // @todo create a hook
        elseif (file_exists(_PS_MODULE_DIR_ . '/blockcart/blockcart-ajax.php'))
            require_once(_PS_MODULE_DIR_ . '/blockcart/blockcart-ajax.php');
    }

}
