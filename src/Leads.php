<?php

/**
 * leads Extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2011-2015, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       http://github.com/terminal42/contao-leads
 */

namespace Terminal42\LeadsBundle;

class Leads extends \Controller
{

    /**
     * Default system columns.
     *
     * @return array
     */
    public static function getSystemColumns()
    {
        \System::loadLanguageFile('tl_lead_export');

        return array(
            '_form' => array(
                'field'         => '_form',
                'name'          => $GLOBALS['TL_LANG']['tl_lead_export']['field_form'],
                'value'         => 'all',
                'format'        => 'raw',
                'valueColRef'   => 'form_id',
                'labelColRef'   => 'form_name'
            ),
            '_created' => array(
                'field'         => '_created',
                'name'          => $GLOBALS['TL_LANG']['tl_lead_export']['field_created'],
                'value'         => 'value',
                'format'        => 'datim',
                'valueColRef'   => 'created'
            ),
            '_member' => array(
                'field'         => '_member',
                'name'          => $GLOBALS['TL_LANG']['tl_lead_export']['field_member'],
                'value'         => 'all',
                'format'        => 'raw',
                'valueColRef'   => 'member_id',
                'labelColRef'   => 'member_name'
            ),
            '_skip' => array(
                'field'         => '_skip',
                'name'          => $GLOBALS['TL_LANG']['tl_lead_export']['field_skip'],
                'value'         => 'value',
                'format'        => 'raw'
            )
        );
    }
}
