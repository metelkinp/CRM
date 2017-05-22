<?php

$module_name = 'PPT_SPQ';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array(
        'includes' => array(),
        'form' => array(
            'buttons' => array(
                'SAVE',
                'CANCEL',
            ),
            'footerTpl' => 'modules/PPT_SPQ/tpls/editViewFooter.tpl',
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
            array('air_waybill', 'account_name'),
            array('', 'shipper_name'),

            array('origin', 'dest'),
            array('service', 'product'),
            array('', 'nature_of_goods'),
            array('c_weight', 'rate'),
            array(
                array(
                    'name' => 'flags_group',
                    'customCode' => '{include file="modules/PPT_SPQ/tpls/flagsGroup.tpl"}',
                    'label' => 'LBL_FLAGS_GROUP',
                ),
                ''
            )
        ),
        'lbl_panel_other' => array(
            array('issue', 'valid_from'),
            array(
                array
                (
                    'name' => 'contact_name',
                    'label' => 'LBL_CONTACT',
                    'displayParams' => array(
                        'initial_filter' => '&account_id=" + encodeURIComponent(document.getElementById("account_id").value) + "',
                    ),
                ),
                'description'
            ),
            array('assigned_user_name', ''),
        ),
    ),
);