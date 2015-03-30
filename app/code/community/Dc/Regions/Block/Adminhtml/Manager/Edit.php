<?php
/**
 * Dc_Regions
 * 
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Dc
 * @package    Dc_Regions
 * @copyright  Copyright (c) 2015 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_Regions_Block_Adminhtml_Manager_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'regions';
        $this->_controller = 'adminhtml_manager';
        $this->_updateButton('save', 'label', Mage::helper('regions')->__('Save Region'));
        $this->_updateButton('delete', 'label', Mage::helper('regions')->__('Delete Region'));
    }

    public function getHeaderText()
    {
        if( Mage::registry('regions_data') && Mage::registry('regions_data')->getId() ) {
            return Mage::helper('regions')->__('Edit Region');
        } else {
            return Mage::helper('regions')->__('Add Region');
        }
    }

}
