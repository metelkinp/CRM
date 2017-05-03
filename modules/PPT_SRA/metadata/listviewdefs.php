<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'PPT_SRA';
$listViewDefs[$module_name] = array(
    'NAME' => array(
        'width' => '32',
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true
    ),
    'ACCOUNT_NAME' => array(
        'width' => '30',
        'label' => 'LBL_ACCOUNT',
        'link' => true,
        'default' => true,
        'id' => 'ACCOUNT_ID',
        'module' => 'PPT_Accounts',
    ),
    'SHIPPER_NAME' => array(
        'width' => '30',
        'label' => 'LBL_SHIPPER',
        'link' => true,
        'default' => true,
        'id' => 'SHIPPER_ID',
        'module' => 'PPT_Accounts',
    ),
    'ORIGIN' => array(
        'width' => '10',
        'label' => 'LBL_ORIGIN',
        'default' => true,
    ),
    'DEST' => array(
        'width' => '10',
        'label' => 'LBL_DEST',
        'default' => true,
    ),
    'SERVICE' => array(
        'width' => '15',
        'label' => 'LBL_SERVICE',
        'default' => true,
    ),
    'MIN_FIELD' => array (
        'width' => '5',
        'label' => 'LBL_MIN',
        'default' => true,
    ),
    'N_FIELD' => array (
        'width' => '5',
        'label' => 'LBL_N',
        'default' => true,
    ),
    'R_45KG' => array (
        'width' => '5',
        'label' => 'LBL_45KG',
        'default' => true,
    ),
    'R_100KG' => array (
        'width' => '5',
        'label' => 'LBL_100KG',
        'default' => true,
    ),
    'R_300KG' => array (
        'width' => '5',
        'label' => 'LBL_300KG',
        'default' => true,
    ),
    'R_500KG' => array (
        'width' => '5',
        'label' => 'LBL_500KG',
        'default' => true,
    ),
    'R_1000KG' => array (
        'width' => '5',
        'label' => 'LBL_1000KG',
        'default' => true,
    ),
    'VALID_FROM' => array(
        'width' => '10',
        'label' => 'LBL_VALID_FROM',
        'default' => true,
    ),
    'VALID_UNTIL' => array(
        'width' => '10',
        'label' => 'LBL_VALID_UNTIL',
        'default' => true,
    ),
);