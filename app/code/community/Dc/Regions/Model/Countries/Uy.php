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

class Dc_Regions_Model_Countries_Uy extends Varien_Object
{

    /**
     * @return array
     */
    public function getRegions()
    {
        return array(
            'AR' => 'Artigas',
            'CA' => 'Canelones',
            'CL' => 'Cerro Largo',
            'CO' => 'Colonia',
            'DU' => 'Durazno',
            'FS' => 'Flores',
            'FD' => 'Florida',
            'LA' => 'Lavalleja',
            'MA' => 'Maldonado',
            'MO' => 'Montevideo',
            'PA' => 'Paysandu',
            'RN' => 'Río Negro',
            'RV' => 'Rivera',
            'RO' => 'Rocha',
            'SA' => 'Salto',
            'SJ' => 'San José',
            'SO' => 'Soriano',
            'TA' => 'Tacuarembó',
            'TT' => 'Treinta y Tres',
        );
    }

}
