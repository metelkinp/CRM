<?php

$module_name = 'PPT_Contracts';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array(
        'includes' => array(
            array('file' => 'modules/PPT_Contracts/javascript/contracts.js'),
        ),
        'form' => array(
            'buttons' => array(
                'SAVE',
                'CANCEL',
            ),
           'footerTpl' => 'modules/PPT_Contracts/tpls/editViewHeader.tpl',
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
            'LBL_PANEL_LINE_ITEMS' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
            'LBL_PANEL_FLIGHTS' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
//            'LBL_PANEL_RATES' => array(
//                'newTab' => true,
//                'panelDefault' => 'expanded',
//            ),
            'LBL_PANEL_OTHER' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
        ),

    ),

    'panels' => array(
        'lbl_panel_main' => array(
            array('status', 'account_name'),
            array('', 'shipper_name'),
            array('',
                array
                (
                    'name' => 'contact_name',
                    'label' => 'LBL_CONTACT',
                    'displayParams' => array(
                        'initial_filter' => '&account_id=" + encodeURIComponent(document.getElementById("account_id").value) + "',
                    ),
                )
            ),
            array('origin', 'service'),
            array('dest', 'product'),
            array('scc', 'iata_code'),
            array('shipping_date', 'arrival_date'),
        ),
        'lbl_panel_line_items' => array(
            array(
                0 => array(
                    'name' => 'line_items_group',
                    'customCode' => '{include file="modules/PPT_Contracts/tpls/lineItemsGroupEdit.tpl"}',
                    'label' => 'LBL_LIG',
                )
            ),
            array('line_items', ''),
        ),
        'lbl_panel_flights' => array(
            array(
                array(
                    'name' => 'flight_search',
                    'customCode' => '{include file="modules/PPT_Contracts/tpls/flightSearchEdit.tpl"}',
                    'label' => 'LBL_FLIGHT_SEARCH',
                ),
            ),
            array('flight',''),
        ),

//        'lbl_panel_rates' => array(),
        'lbl_panel_other' => array(
            array('start_date', 'end_date'),
            array('customer_signed_date', 'company_signed_date'),
            array('assigned_user_name', ''),
        ),
    ),
);