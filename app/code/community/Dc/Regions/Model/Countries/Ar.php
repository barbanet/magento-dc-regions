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

class Dc_Regions_Model_Countries_Ar extends Varien_Object
{

    /**
     * @return array
     */
    public function getRegions()
    {
        return array(
            'BA' => 'Buenos Aires',
            'CABA' => 'Ciudad Autónoma de Buenos Aires',
            'CT' => 'Catamarca',
            'CC' => 'Chaco',
            'CH' => 'Chubut',
            'CB' => 'Cordoba',
            'CR' => 'Corrientes',
            'ER' => 'Entre Rios',
            'FO' => 'Formosa',
            'JY' => 'Jujuy',
            'LP' => 'La Pampa',
            'LR' => 'La Rioja',
            'MZ' => 'Mendoza',
            'MN' => 'Misiones',
            'NQ' => 'Neuquén',
            'RN' => 'Río Negro',
            'SA' => 'Salta',
            'SJ' => 'San Juan',
            'SL' => 'San Luis',
            'SC' => 'Santa Cruz',
            'SF' => 'Santa Fe',
            'SE' => 'Santiago del Estero',
            'TF' => 'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
            'TM' => 'Tucumán'
        );
    }

}