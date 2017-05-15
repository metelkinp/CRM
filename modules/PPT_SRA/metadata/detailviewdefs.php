<?php

$module_name = 'PPT_SRA';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array (
        'includes' => array(
            array('file' => 'modules/PPT_SRA/javascript/rates.js'),
        ),
        'form' => array (
            'buttons' => array (
                'EDIT',
                'DELETE',
            ),
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => 10, 'field' => 30),
            array('label' => 10, 'field' => 30),
        ),
        'useTabs' => true,
        'tabDefs' => array(
            'LBL_PANEL_MAIN' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
            'LBL_PANEL_RATES' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
            'LBL_PANEL_OTHER' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
        ),
    ),

    'panels' => array (
        'lbl_panel_main' => array(
            array('name','issue'),
            array('valid_from','valid_until'),
            array('account_name','shipper_name'),
            array('origin', 'dest'),
            array ('service','product'),
            array('currency', ''),
            array('capri',''),
        ),
        'lbl_panel_rates' => array (
            array('min_field',''),
            array('n_field',''),
            array(
                0 => array(
                    'name' => 'rates_group',
                    'customCode' => '{include file="modules/PPT_SRA/tpls/ratesDetails.tpl"}',
                    'label' => 'LBL_RATES_GROUP',
                )
            ),
            array('rates', ''),
        ),
        'lbl_panel_other' => array (
            array('contact_name', 'description'),
            array('assigned_user_name',''),
        ),
    ),
);