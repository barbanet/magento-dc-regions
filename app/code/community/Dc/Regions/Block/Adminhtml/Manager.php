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
 * @copyright  Copyright (c) 2014-2015 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_Regions_Block_Adminhtml_Manager extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_manager';
        $this->_blockGroup = 'regions';
        $this->_headerText = Mage::helper('regions')->__('Regions Manager');
        $this->_addButtonLabel = Mage::helper('regions')->__('Add Region');
        parent::__construct();
    }

}
