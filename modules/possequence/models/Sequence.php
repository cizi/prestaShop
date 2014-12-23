<?php
class Sequence extends ObjectModel
{
 	/** @var string Name */
		public $title1;
		public $title2;
        public $description;
        public $bgimage;
		public $image;
        public $image2;
        public $link;
		public $animate;
		public $active;
        public $porder;
		public $kind_effect;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'pos_sequence',
		'multilang' => TRUE,
		'multishop' => TRUE,
		'primary' => 'id_pos_sequence',
		'fields' => array(
                    'title1' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
					'title2' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
					'animate' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => false, 'size' => 265),
                    'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString', 'size' => 3999999999999),
                    'bgimage' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isString', 'required' => false, 'size' => 3999999999),
					'image' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isString', 'required' => false, 'size' => 3999999999),
					'image2' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isString', 'required' => false, 'size' => 3999999999),
				    'link' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
					'active' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
					'kind_effect' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
                    'porder' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
                ),
	);
}