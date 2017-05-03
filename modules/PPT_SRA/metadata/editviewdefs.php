<?php

$module_name = 'myppt_SRA';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array(
        'form' => array(
            'buttons' => array(
                'SAVE',
                'CANCEL',
            ),
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => 10, 'field' => 30),
            array('label' => 10, 'field' => 30),
        ),
    ),

    'panels' => array(
        //lbl_... this found into language/en_us.lang.php
        'lbl_panel_main' => array(
            //first row
            array('agent_name', 'shipper_name'),
            //second row
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
            array('r_45kg',''),
            array('r_100kg',''),
            array('r_300kg',''),
            array('r_500kg',''),
            array('r_1000kg',''),
        ),
        'lbl_panel_other' => array(
            array('contact_name', 'description'),
            array('created_by_name'),
        ),
    ),
);