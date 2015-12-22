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

class Dc_Regions_Model_Installer extends Varien_Object
{
    protected $_regions = null;
    /**
     * @var array
     */
    private $valid_countries = array('AR', 'BR','UY');

    /**
     * @return array
     */
    public function getOptionArray()
    {
        $countries = Mage::getModel('directory/country')->getCollection();
        $options = array();

        foreach ($countries as $value) {
            if (in_array($value->getCountryId(), $this->valid_countries) && !$this->_alreadyInstalled($value->getCountryId())) {
                $options[$value->getCountryId()] = $value->getName();
            }
        }
        asort($options);
        return $options;
    }

    protected function _alreadyInstalled($countryCode){

        if(is_null($this->_regions)){
            $validCountries = $this->valid_countries;
            $regions = Mage::getModel('directory/region')->getCollection()->addCountryFilter($validCountries);
            $this->_regions = $regions;
        }

        $regionByCode = $this->_regions->getItemsByColumnValue('country_id',$countryCode);
        return (bool)count($regionByCode)>0;

    }
    /**
     * @param $country_id
     * @return bool
     * @throws Exception
     */
    public function runInstall($country_id)
    {
        try {
            if (in_array($country_id, $this->valid_countries)) {
                $regions = $this->getCountryModel($country_id);
                if ($regions) {
                    $values = $regions->getRegions();
                    foreach ($values as $region_code => $region_name) {
                        $insert = array(
                            'country_id' => $country_id,
                            'code' => $region_code,
                            'default_name' => $region_name
                        );
                        Mage::getModel('directory/region')->setData($insert)->save();
                    }
                    return true;
                } else {
                    throw new Exception(Mage::helper('regions')->__('Country model is invalid.'));
                }
            }
        } catch (Exception $e) {
            Mage::logException($e);
            throw new Exception($e->getMessage());
            return false;
        }
    }

    /**
     * @param $country_id
     * @return bool|false|Mage_Core_Model_Abstract
     */
    private function getCountryModel($country_id)
    {
        if ($country_id) {
            return Mage::getModel('regions/countries_' . strtolower($country_id));
        }
        return false;
    }

}
