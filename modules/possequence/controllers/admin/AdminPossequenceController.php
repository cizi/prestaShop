<?php

class AdminPossequenceController extends ModuleAdminController
{
	public function __construct()
	{
		$this->table = 'pos_sequence';
		$this->className = 'Sequence';
		$this->lang = true;
		$this->bootstrap = true;
		$this->deleted = false;
		$this->colorOnBackground = false;
		$this->bulk_actions = array('delete' => array('text' => $this->l('Delete selected'), 'confirm' => $this->l('Delete selected items?')));
                Shop::addTableAssociation($this->table, array('type' => 'shop'));
		$this->context = Context::getContext();
                
        $this->fieldImageSettings[] = array(
 			'name' => 'bgimage',
 			'dir' => 'possequence'
 		);
		$this->fieldImageSettings[] = array(
 			'name' => 'image',
 			'dir' => 'possequence'
 		);
        
		$this->fieldImageSettings[] = array(
 			'name' => 'image2',
 			'dir' => 'possequence'
 		);
        
        $this->imageType = "jpg";
		
		parent::__construct();
	}
        
        public function renderList() {
            
            $this->addRowAction('edit');
            $this->addRowAction('delete');
            $this->bulk_actions = array(
                'delete' => array(
                    'text' => $this->l('Delete selected'),
                    'confirm' => $this->l('Delete selected items?')
                )
            );

            $this->fields_list = array(
                'id_pos_sequence' => array(
                    'title' => $this->l('ID'),
                    'align' => 'center',
                    'width' => 25
                ),
                  'title1' => array(
                    'title' => $this->l('Title1'),
                    'width' => 90,
                ),
				'title2' => array(
                    'title' => $this->l('Title2'),
                    'width' => 90,
                ),
                  'link' => array(
                    'title' => $this->l('Link'),
                    'width' => 90,
                ),
				 'active' => array(
				 'title' => $this->l('Displayed'), 
				 'width' => 25, 
				 'align' => 'center', 
				 'active' => 'active', 
				 'type' => 'bool', 
				 'orderby' => FALSE
				 ),
                'porder' => array(
                    'title' => $this->l('Order'),
                    'width' => 10,
                ),
            );
            
           /* $this->fields_list['image'] = array(
                'title' => $this->l('Image'),
                'width' => 70,
                "image" => $this->fieldImageSettings["dir"]
            );*/
//            

            $lists = parent::renderList();
            parent::initToolbar();

            return $lists;
    }
    
    
    public function renderForm() {
	
	  $listEffect = array(
            array('kind_effect'=> 'Effect1','id_effect'=> 1),
            array('kind_effect'=> 'Effect2','id_effect'=> 2),
            array('kind_effect'=> 'Effect3','id_effect'=> 3),
			array('kind_effect'=> 'Effect4','id_effect'=> 4),
                    );
					
	  $listAnimate = array(
            array('animate'=> 'Animate In','id_animate'=> 'animate-in'),
            array('animate'=> 'Animate Out','id_animate'=> 'animate-out'),
                    );				
        
        
        $this->fields_form = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->l('Banner Fraction'),
                'image' => '../img/admin/cog.gif'
            ),
            'input' => array(
				array(
						'type' => 'select',
						'label' => $this->l('Animation:'),
						'name' => 'animate',
						'required' => true,
						'options' => array(
							'query' => $listAnimate,
							'id' => 'id_animate',
							'name' => 'animate'
						),
					 
						'desc' => $this->l('Choose the type of the Hooks')
					),
                array(
                    'type' => 'text',
                    'label' => $this->l('Title1:'),
                    'name' => 'title1',
					'lang' => true,
                    'size' => 40
                ),
				array(
                    'type' => 'text',
                    'label' => $this->l('Title2:'),
                    'name' => 'title2',
					'lang' => true,
                    'size' => 40
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Link:'),
                    'name' => 'link',
					'lang' => true,
                    'size' => 40
                ),
                array(
                    'type' => 'file',
                    'label' => $this->l('Backgorund Image:'),
                    'name' => 'bgimage',
                    'desc' => $this->l('Upload  a banner from your computer.')
                ),
				array(
                    'type' => 'file',
                    'label' => $this->l('Image:'),
                    'name' => 'image',
					'desc' => $this->l('Upload  a banner from your computer.')
                ),
				array(
                    'type' => 'file',
                    'label' => $this->l('Image2:'),
                    'name' => 'image2',
					'desc' => $this->l('Upload  a banner from your computer.')
                ),
              array(
                'type' => 'textarea',
                'label' => $this->l('Description'),
                'name' => 'description',
                'autoload_rte' => TRUE,
				'lang' => true,
                'required' => TRUE,
                'rows' => 5,
                'cols' => 40,
                'hint' => $this->l('Invalid characters:') . ' <>;=#{}'
               ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Order:'),
                    'name' => 'porder',
                    'size' => 40,
                    'require' => false
                ),
				 array(
					'type' => 'select',
					'label' => $this->l('Kind Effect:'),
					'name' => 'kind_effect',
					'required' => true,
					'options' => array(
						'query' => $listEffect,
						'id' => 'id_effect',
						'name' => 'kind_effect'
					),
				 
					'desc' => $this->l('Choose the type of the Hooks')
				),
				array(
                    'type' => 'radio',
                    'label' => $this->l('Displayed:'),
                    'name' => 'active',
                    'required' => FALSE,
                    'class' => 't',
                    'is_bool' => FALSE,
                    'values' => array(array(
                            'id' => 'require_on',
                            'value' => 1,
                            'label' => $this->l('Yes')), array(
                            'id' => 'require_off',
                            'value' => 0,
                            'label' => $this->l('No')))
				),
				
            ),
             'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            )
        );
                 if (Shop::isFeatureActive())
                $this->fields_form['input'][] = array(
                        'type' => 'shop',
                        'label' => $this->l('Shop association:'),
                        'name' => 'checkBoxShopAsso',
                );

        if (!($obj = $this->loadObject(true)))
            return;


        return parent::renderForm();
    }
	
	
	protected function uploadImage($id, $name, $dir, $ext = false, $width = null, $height = null)
	{
		if (isset($_FILES[$name]['tmp_name']) && !empty($_FILES[$name]['tmp_name']))
		{
			// Delete old image
			if (Validate::isLoadedObject($object = $this->loadObject()))
				$object->deleteImage();
			else
				return false;

			// Check image validity
			$max_size = isset($this->max_image_size) ? $this->max_image_size : 0;
			if ($error = ImageManager::validateUpload($_FILES[$name], Tools::getMaxUploadSize($max_size)))
				$this->errors[] = $error;

			$tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
			if (!$tmp_name)
				return false;

			if (!move_uploaded_file($_FILES[$name]['tmp_name'], $tmp_name))
				return false;

			// Evaluate the memory required to resize the image: if it's too much, you can't resize it.
			if (!ImageManager::checkImageMemoryLimit($tmp_name))
				$this->errors[] = Tools::displayError('Due to memory limit restrictions, this image cannot be loaded. Please increase your memory_limit value via your server\'s configuration settings. ');

			// Copy new image
				if (empty($this->errors) && !ImageManager::resize($tmp_name, _PS_MODULE_DIR_.'possequence'.DS.'images'.DS.$name.'_'.$id.'.'.$this->imageType, (int)$width, (int)$height, ($ext ? $ext : $this->imageType)))
					$this->errors[] = Tools::displayError('An error occurred while uploading the image.');
			
			if (count($this->errors))
				return false;
			if ($this->afterImageUpload())
			{
				unlink($tmp_name);
				return true;
			}
			return false;
		}
		return true;
	}
	
	protected function postImage($id)
	{
		if (isset($this->fieldImageSettings['name']) && isset($this->fieldImageSettings['dir']))
			return $this->uploadImage($id, $this->fieldImageSettings['name'], $this->fieldImageSettings['dir'].'/');
		elseif (!empty($this->fieldImageSettings))
			foreach ($this->fieldImageSettings as $image)
				if (isset($image['name']) && isset($image['dir']))
					$this->uploadImage($id, $image['name'], $image['dir'].'/');
		return !count($this->errors) ? true : false;
	}
    

}
