<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'PPT_SPQ';
$listViewDefs[$module_name] = array(
    'NAME' => array(
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true,
        'width' => '8%'
    ),
    'AIR_WAYBILL' => array(
        'label' => 'LBL_AIR_WAYBILL',
        'default' => true,
        'width' => '8%'
    ),
    'ACCOUNT_NAME' => array(
        'label' => 'LBL_ACCOUNT',
        'link' => true,
        'id' => 'ACCOUNT_ID',
        'module' => 'PPT_Accounts',
        'default' => true,
        'width' => '8%'
    ),
    'SHIPPER_NAME' => array(
        'label' => 'LBL_SHIPPER',
        'link' => true,
        'id' => 'SHIPPER_ID',
        'module' => 'PPT_Accounts',
        'default' => true,
        'width' => '8%'
    ),
    'ORIGIN' => array(
        'label' => 'LBL_ORIGIN',
        'default' => true,
        'width' => '8%'
    ),
    'DEST' => array(
        'label' => 'LBL_DEST',
        'default' => true,
        'width' => '8%'
    ),
    'SERVICE' => array(
        'label' => 'LBL_SERVICE',
        'default' => true,
        'width' => '8%'
    ),
    'C_WEIGHT' => array(
        'label' => 'LBL_C_WEIGHT',
        'default' => true,
        'width' => '8%'
    ),
    'RATE' => array(
        'label' => 'LBL_RATE',
        'default' => true,
        'width' => '8%'
    ),
    'ISSUE' => array(
        'label' => 'LBL_ISSUE',
        'default' => true,
        'width' => '8%'
    ),
    'VALID_FROM' => array(
        'label' => 'LBL_VALID_FROM',
        'default' => true,
        'width' => '8%'
    ),
    'ADD_HOC' => array(
        'label' => 'LBL_ADD_HOC',
        'default' => true,
        'width' => '2%'
    ),
    'HIGH_DENSE' => array(
        'label' => 'LBL_HIGH_DENSE',
        'default' => true,
        'width' => '2%'
    ),
    'FREIGHT_MATERIAL' => array(
        'label' => 'LBL_FREIGHT_MATERIAL',
        'default' => true,
        'width' => '2%'
    ),
    'FUP' => array(
        'label' => 'LBL_FUP',
        'default' => true,
        'width' => '2%'
    ),
    'LOST_BUSINESS' => array(
        'label' => 'LBL_LOST_BUSINESS',
        'default' => true,
        'width' => '2%'
    ),
    'PROACTIVE_CALL' => array(
        'label' => 'LBL_PROACTIVE_CALL',
        'default' => true,
        'width' => '2%'
    )
);