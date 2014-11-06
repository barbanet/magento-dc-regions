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

class Dc_Regions_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function getCountries()
    {
        $collection = Mage::getModel('directory/country')->getCollection();
        $countries = array();
        foreach ($collection as $value) {
            $countries[$value->getCountryId()] = $value->getName();
        }
        asort($countries);
        return $countries;
    }

}
