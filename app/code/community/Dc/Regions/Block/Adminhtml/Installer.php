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

class Dc_Regions_Block_Adminhtml_Installer extends Mage_Adminhtml_Block_Widget
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('dc/regions/installer.phtml');
    }

    /**
     * @return string
     */
    public function getHeaderText()
    {
        return Mage::helper('regions')->__('Regions Installer');
    }

    /**
     * @return Mage_Core_Block_Abstract
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->getLayout()->getBlock('head')->addCss('dc/regions/css/style.css');
        $this->setChild('backButton',
            $this->getLayout()->createBlock('adminhtml/widget_button')
                ->setData(array(
                    'label'   => Mage::helper('regions')->__('Back'),
                    'onclick' => 'setLocation(\'' . $this->getUrl('*/*/index') .'\')',
                    'class'   => 'back'
                ))
        );
    }

    /**
     * @return string
     */
    public function getSaveUrl()
    {
        return $this->getUrl('*/*/install');
    }

    /**
     * @return string
     */
    public function getBackButtonHtml()
    {
        return $this->getChildHtml('backButton');
    }

    public function getCountries()
    {
        return Mage::getModel('regions/installer')->getOptionArray();
    }

}
