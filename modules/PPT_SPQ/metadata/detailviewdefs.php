<?php

$module_name = 'PPT_SPQ';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'includes' => array(),
        'form' => array(
            'buttons' => array(
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
            'LBL_PANEL_OTHER' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
        ),
    ),

    'panels' => array(
        'lbl_panel_main' => array(
            array('air_waybill', ''),
            array('account_name', 'shipper_name'),

            array('origin', 'service'),
            array('dest', 'product'),
            array('nature_of_goods', ''),
            array('c_weight', 'rate'),
            array(
                array(
                    'name' => 'flags_group',
                    'customCode' => '{include file="modules/PPT_SPQ/tpls/flagsGroupDetails.tpl"}',
                    'label' => 'LBL_FLAGS_GROUP',
                ),
                ''
            )
        ),
        'lbl_panel_other' => array(
            array('issue', 'valid_from'),
            array('contact_name', 'description'),
            array('assigned_user_name', ''),
        ),
    ),

);