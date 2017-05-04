<?php

$module_name = 'PPT_SRA';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array (
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
            array('r_45kg',''),
            array('r_100kg',''),
            array('r_300kg',''),
            array('r_500kg',''),
            array('r_1000kg',''),
        ),
        'lbl_panel_other' => array (
            array('contact_name', 'description'),
            array('assigned_user_name',''),
        ),
    ),
);