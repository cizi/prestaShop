<?php

// Security
if (!defined('_PS_VERSION_'))
	exit;

// Checking compatibility with older PrestaShop and fixing it
if (!defined('_MYSQL_ENGINE_'))
	define('_MYSQL_ENGINE_', 'MyISAM');

// Loading Models
require_once(_PS_MODULE_DIR_ . 'possequence/models/Sequence.php');
class Possequence extends Module {
    private $_html = '';
    private $_postErrors = array();
        
    public function __construct() {
        $this->name = 'possequence';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'posthemes';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6');

        parent::__construct();

        $this->displayName = $this->l('Pos Banner Sequence');
        $this->description = $this->l('block config');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
	$this->admin_tpl_path 	= _PS_MODULE_DIR_.$this->name.'/views/templates/admin/';
        
    }

   

    public function install()
	{
        
        //create folder blocklogo
        $path = _PS_MODULE_DIR_.'possequence/images';
        if (!file_exists($path)) { 
            mkdir($path, 0777, true);
        }  
        
        // Install SQL
		include(dirname(__FILE__).'/sql/install.php');
		foreach ($sql as $s)
			if (!Db::getInstance()->execute($s))
				return false;
        
          // Install Tabs
		if(!(int)Tab::getIdFromClassName('AdminPosMenu')) {
			$parent_tab = new Tab();
			// Need a foreach for the language
			$parent_tab->name[$this->context->language->id] = $this->l('PosExtentions');
			$parent_tab->class_name = 'AdminPosMenu';
			$parent_tab->id_parent = 0; // Home tab
			$parent_tab->module = $this->name;
			$parent_tab->add();
		}
		
		
		
		$tab = new Tab();		
		// Need a foreach for the language
		foreach (Language::getLanguages() as $language)
		$tab->name[$language['id_lang']] = $this->l('Manage Banner Sequence');
		$tab->class_name = 'AdminPossequence';
		$tab->id_parent = (int)Tab::getIdFromClassName('AdminPosMenu');
		$tab->module = $this->name;
		$tab->add();
                if(
                    !Configuration::updateValue($this->name.'_pause_time', 5000) OR
                    !Configuration::updateValue($this->name.'_animation_speed', 3000)OR
				    !Configuration::updateValue($this->name.'_show_arrow', 1) OR
				    !Configuration::updateValue($this->name.'_show_navigation', 0) OR
                    !Configuration::updateValue($this->name.'_auto_slide', 1) OR
		    		!Configuration::updateValue($this->name.'_hover', 0)
				) {return false;}
	
		// Set some defaults
                return parent::install() &&
                 $this->registerHook('actionObjectSlideshowAddAfter') &&
                 $this->registerHook('top')&&
                 $this->registerHook('leftColumn')&&
				 $this->registerHook('bannerSequence')&&
				$this->registerHook('displayHeader');
              
	}
        
        public function uninstall() {
            
		Configuration::deleteByName('POSSEQUENCE');

		// Uninstall Tabs
		//$tab = new Tab((int)Tab::getIdFromClassName('AdminPosMenu'));
		//$tab->delete();
             $tab = new Tab((int)Tab::getIdFromClassName('AdminPossequence'));
		$tab->delete();
		Configuration::deleteByName($this->name.'_pause_time');
		Configuration::deleteByName($this->name.'_animation_speed');
        Configuration::deleteByName($this->name.'_show_arrow');
		Configuration::deleteByName($this->name.'_show_navigation');
		Configuration::deleteByName($this->name.'_auto_slide');
		//uninstall db
                include(dirname(__FILE__).'/sql/uninstall_sql.php');
		foreach ($sql as $s)
			if (!Db::getInstance()->execute($s))
				return false;
		// Uninstall Module
		if (!parent::uninstall())
			return false;
		// !$this->unregisterHook('actionObjectExampleDataAddAfter')
		return true;
        }

	private function _postValidation()
	{

	}
	
	private function _postProcess()
	{  
	
		Configuration::updateValue($this->name.'_pause_time', Tools::getValue('pause_time'));
		Configuration::updateValue($this->name.'_animation_speed', Tools::getValue('animation_speed')); 
		Configuration::updateValue($this->name.'_show_arrow', Tools::getValue('show_arrow'));
		Configuration::updateValue($this->name.'_show_navigation', Tools::getValue('show_navigation'));
		Configuration::updateValue($this->name.'_auto_slide', Tools::getValue('auto_slide'));
		Configuration::updateValue($this->name.'_hover', Tools::getValue('hover'));
		
		
		$this->_html .= '<div class="conf confirm">'.$this->l('Settings updated').'</div>';
	}
	
	public function getContent()
	{
		$this->_html .= '<h2>'.$this->displayName.'</h2>';
		
		if (Tools::isSubmit('submit'))
		{			
			$this->_postValidation();
			
			if (!sizeof($this->_postErrors))
				$this->_postProcess();
			else
			{
				foreach ($this->_postErrors AS $err)
				{
					$this->_html .= '<div class="alert error">'.$err.'</div>';
				}
			}
		}
		
		$this->_displayForm();
		
		return $this->_html;
	}
        
    public function getSlideshow() {
		$id_shop = (int)Context::getContext()->shop->id;
		$id_lang = (int)$this->context->language->id;
		$sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'pos_sequence` ps 
			LEFT JOIN `' . _DB_PREFIX_ . 'pos_sequence_lang`  psl ON ps.id_pos_sequence = psl.id_pos_sequence   
			LEFT JOIN `' . _DB_PREFIX_ . 'pos_sequence_shop`  s ON ps.id_pos_sequence = s.id_pos_sequence   
			WHERE s.`id_shop` ='.$id_shop.'  
			AND psl.`id_lang` ='.$id_lang.' 
			AND ps.`active` =1
			ORDER BY `porder` ASC';
		$slides = Db::getInstance()->ExecuteS($sql);
			
		if(is_array($slides)){
			$limit = 0;
			$arraySlides = array();
			foreach($slides  as $key => $slideArray) {
				 //echo "<pre>"; print_r($slideArray); 
				$newSlide = array();
				 foreach($slideArray as $k => $v) {
				 
					if($k=='bgimage' ){
						   $v = _PS_BASE_URL_.__PS_BASE_URI__.'modules/possequence/images/bgimage_'.$slideArray['id_pos_sequence'].'.jpg';
					 }
					 if($k=='image' ){
						   $v = _PS_BASE_URL_.__PS_BASE_URI__.'modules/possequence/images/image_'.$slideArray['id_pos_sequence'].'.jpg';
					 }
					 if($k=='image2' ){
						   $v = _PS_BASE_URL_.__PS_BASE_URI__.'modules/possequence/images/image2_'.$slideArray['id_pos_sequence'].'.jpg';
					 }

					 $newSlide[$k] = $v;
				 }
				 $arraySlides[$key] = $newSlide;
			}
	
		}
		return $arraySlides;
    }
    private function _displayForm(){ 
            $this->_html .= '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
                  <fieldset>
                    <legend><img src="../img/admin/cog.gif" alt="" class="middle" />' . $this->l('Settings') . '</legend>
					<label>'.$this->l('Auto Slide: ').'</label>
                    <div class="margin-form">';
                       $this->_html .= $this->getSelectOptionsHtml(array(0=>'No',1=>'Yes'),'auto_slide',  (Tools::getValue('auto_slide') ? Tools::getValue('auto_slide') : Configuration::get($this->name . '_auto_slide')));
                       $this->_html .='
                    </div>
      
                    <label>'.$this->l('Delay Time: ').'</label>
                    <div class="margin-form">
                            <input type = "text"  name="pause_time" value ='. (Tools::getValue('pause_time')?Tools::getValue('pause_time'): Configuration::get($this->name.'_pause_time')).' ></input>
                    </div>
                   
					 <label>'.$this->l('Pause on hover: ').'</label>
                    <div class="margin-form">';
                       $this->_html .= $this->getSelectOptionsHtml(array(0=>'No',1=>'Yes'),'hover',  (Tools::getValue('hover') ? Tools::getValue('hover') : Configuration::get($this->name . '_hover')));
                       $this->_html .='
                    </div>
                    <label>'.$this->l('Show Next/Back: ').'</label>
                    <div class="margin-form">';
                       $this->_html .= $this->getSelectOptionsHtml(array(false=>'No',true=>'Yes'),'show_arrow',  (Tools::getValue('show_arrow') ? Tools::getValue('show_arrow') : Configuration::get($this->name . '_show_arrow')));
                       $this->_html .='
                    </div>
                     <label>'.$this->l('Show navigation control: ').'</label>
                    <div class="margin-form">';
                       $this->_html .= $this->getSelectOptionsHtml(array(false=>'No', true =>'Yes'),'show_navigation',  (Tools::getValue('show_navigation') ? Tools::getValue('show_navigation') : Configuration::get($this->name . '_show_navigation')));
                       $this->_html .='
                    </div>
                    <input type="submit" name="submit" value="'.$this->l('Update').'" class="button" />
                     </fieldset>
		</form>';
	}
        public function getSelectOptionsHtml($options = NULL, $name = NULL, $selected = NULL) {
            $html = "";
            $html .='<select name ='.$name.'>';
            if(count($options)>0) {
                foreach($options as $key => $val) {
                    if(trim($key) == trim($selected)) {
                        $html .='<option value='.$key.' selected="selected">'.$val.'</option>';
                    } else {
                        $html .='<option value='.$key.'>'.$val.'</option>';
                    }
                }
            }
            $html .= '</select>';
            return $html;
        }
        
	public function getTransitionTypeArray() {
		return array(
			"random" => "random",   
			"sliceDown" => "sliceDown",
			"sliceDownLeft" => "sliceDownLeft",
			"sliceUp" => "sliceUp",
			"sliceUpLeft" => "sliceUpLeft",
			"sliceUpDown" => "sliceUpDown",
			"sliceUpDownLeft" => "sliceUpDownLeft",
			"fold" => "fold",
			"fade" => "fade",
			"slideInRight" => "slideInRight",
			"slideInLeft" => "slideInLeft",
			"boxRandom" => "boxRandom",
			"boxRain" => "boxRain",
			"boxRainReverse" => "boxRainReverse",
			"boxRainGrow" => "boxRainGrow",
			"boxRainGrowReverse" => "boxRainGrowReverse",
		);
	}
        
	public function hookDisplayHeader()
	{ 
		//$this->context->controller->addCSS($this->_path.'views/css/style.css');
		$this->context->controller->addCSS($this->_path.'views/css/bannersequence.css');
		$this->context->controller->addJS($this->_path.'views/js/jquery.sequence.js');
	}
	function hookBannerSequence($params)
	{ 
            
            $options = array(
                'pause_time' => Configuration::get($this->name.'_pause_time'),
                'animation_speed' => Configuration::get($this->name.'_animation_speed'),
                'show_arrow' => Configuration::get($this->name.'_show_arrow'),
                'show_navigation' => Configuration::get($this->name.'_show_navigation'),
                'auto_slide' => Configuration::get($this->name.'_auto_slide'),
				'hover' => Configuration::get($this->name.'_hover'),

            );

            $slides = $this->getSlideshow();
            $this->context->smarty->assign('slideOptions', $options);
            $this->context->smarty->assign('slides', $slides);
            return $this->display(__FILE__, 'slideshow.tpl');
	}
	
    public function hookActionObjectSlideshowAddAfter($params) {
	
		return true;
	}
	private function _installHookCustomer(){
		$hookspos = array(
				'bannerSequence',
			); 
		foreach( $hookspos as $hook ){
			if( Hook::getIdByName($hook) ){
				
			} else {
				$new_hook = new Hook();
				$new_hook->name = pSQL($hook);
				$new_hook->title = pSQL($hook);
				$new_hook->add();
				$id_hook = $new_hook->id;
			}
		}
		return true;
	}
}