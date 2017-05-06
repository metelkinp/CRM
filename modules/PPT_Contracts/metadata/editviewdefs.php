<?php

$module_name = 'PPT_Contracts';
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
        'lbl_panel_main' => array(
            array('status', 'account_name'),
            array('', 'shipper_name'),
            array('', 'contact_name'),
            array('origin', 'dest'),
            array('service', 'product'),
            array('scc', 'iata_code'),
            array('shipping_date', 'arrival_date'),
        ),
        'lbl_panel_line_items' => array(
            array(
                array(
                    'name' => 'line_items_group',
                    'customCode' => '{include file="modules/PPT_Contracts/tpls/lineItemsGroup.tpl"}',
                    'label' => 'LBL_LIG',
                ),
            ),
            array('line_items', ''),
        ),
        'lbl_panel_rates' => array(),
        'lbl_panel_other' => array(
            array('start_date', 'end_date'),
            array('customer_signed_date', 'company_signed_date'),
            array('assigned_user_name', ''),
        ),
    ),
);