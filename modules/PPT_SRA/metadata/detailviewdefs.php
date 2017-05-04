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
            array('name'),
            array('agent_name','shipper_name'),
            array('origin', 'dest'),
            array ('service','product'),
            array('issue','valid_from'),
            array('valid_until'),
            array('capri','currency'),
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
            array(
                'name' => 'date_entered',
                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                'label' => 'LBL_DATE_ENTERED',
            ),
            array(
                'name' => 'date_modified',
                'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                'label' => 'LBL_DATE_MODIFIED',
            ),
            array('assigned_user_name',''),
        ),
    ),
);