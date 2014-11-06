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
 * @copyright  Copyright (c) 2014 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_Regions_Block_Adminhtml_Manager_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('region_form', array('legend' => Mage::helper('regions')->__('Region Information')));
        
        
        $fieldset->addField('country_id', 'select', array(
            'label'     => Mage::helper('regions')->__('Country'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'country_id',
            'values'    => Mage::helper('regions')->getCountries()
        ));
        
        $fieldset->addField('code', 'text', array(
            'label'     => Mage::helper('regions')->__('Code'),
            'class'     => 'required-entry region-code',
            'required'  => true,
            'name'      => 'code',
            'note'      => Mage::helper('regions')->__('The code must have between 1 and 32 characters')
        ));
        
        $fieldset->addField('default_name', 'text', array(
            'label'     => Mage::helper('regions')->__('Name'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'default_name',
        ));

        if (Mage::getSingleton('adminhtml/session')->getRegionsData()) {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getRegionsData());
            Mage::getSingleton('adminhtml/session')->setRegionsData(null);
        } elseif (Mage::registry('regions_data')) {
            $form->setValues(Mage::registry('regions_data')->getData());
        }
        return parent::_prepareForm();
    }

}
