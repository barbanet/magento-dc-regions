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

class Dc_Regions_Block_Adminhtml_Manager_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('regionsGrid');
        $this->setDefaultSort('default_name');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('directory/region')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('region_id', array(
            'header'    => Mage::helper('regions')->__('ID'),
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'region_id',
        ));

        $this->addColumn('country_id', array(
            'header'    => Mage::helper('regions')->__('Country'),
            'type'      => 'options',
            'options'   => Mage::helper('regions')->getCountries(),
            'index'     => 'country_id',
        ));
        
        $this->addColumn('code', array(
            'header'    => Mage::helper('regions')->__('Code'),
            'index'     => 'code',
        ));

        $this->addColumn('default_name', array(
            'header'    => Mage::helper('regions')->__('Name'),
            'index'     => 'default_name',
        ));

        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('regions')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('regions')->__('Edit'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
        
        $this->addExportType('*/*/exportCsv', Mage::helper('regions')->__('CSV'));
        $this->addExportType('*/*/exportXml', Mage::helper('regions')->__('XML'));
        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
    
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current'=>true));
    }

}
