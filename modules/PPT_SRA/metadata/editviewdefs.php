<?php

$module_name = 'PPT_SRA';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array(
        'includes' => array(
            array('file' => 'modules/PPT_SRA/javascript/sra.js'),
        ),
        'form' => array(
            'buttons' => array(
                'SAVE',
                'CANCEL',
            ),
            'footerTpl' => 'modules/PPT_SRA/tpls/editViewFooter.tpl',
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

    'panels' => array(
        'lbl_panel_main' => array(
            array('account_name', 'shipper_name'),
            array('origin', 'dest'),
            array('service', 'product'),
            array('issue', 'valid_from'),
            array(
                0 => array(),
                1 => array (
                    'name' => 'valid_until',
                ),
            ),
            array('currency', 'capri'),
        ),
        'lbl_panel_rates' => array (
            array('min_field',''),
            array('n_field',''),
            array(
                0 => array(
                    'name' => 'rates_group',
                    'customCode' => '{include file="modules/PPT_SRA/tpls/ratesEdit.tpl"}',
                    'label' => 'LBL_RATES_GROUP',
                )
            ),
            array('rates', ''),
//            array('r_45kg',''),
//            array('r_100kg',''),
//            array('r_300kg',''),
//            array('r_500kg',''),
//            array('r_1000kg',''),
        ),
        'lbl_panel_other' => array(
            array('contact_name', 'description'),
            array('assigned_user_name',''),
        ),
    ),
);