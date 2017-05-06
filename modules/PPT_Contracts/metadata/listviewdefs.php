<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'PPT_Contracts';
$listViewDefs[$module_name] = array(
    'NAME' => array(
        'width' => '32%',
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true
    ),
    'ACCOUNT_NAME' => array(
        'width' => '30%',
        'label' => 'LBL_AGENT',
        'link' => true,
        'default' => true,
        'id' => 'ACCOUNT_ID',
        'module' => 'PPT_Accounts',
    ),
    'SHIPPER_NAME' => array(
        'width' => '30%',
        'label' => 'LBL_SHIPPER',
        'link' => true,
        'default' => true,
        'id' => 'SHIPPER_ID',
        'module' => 'PPT_Accounts',
    ),
    'ORIGIN' => array(
        'width' => '10%',
        'label' => 'LBL_ORIGIN',
        'default' => true,
    ),
    'DEST' => array(
        'width' => '10%',
        'label' => 'LBL_DEST',
        'default' => true,
    ),
    'SERVICE' => array(
        'width' => '15%',
        'label' => 'LBL_SERVICE',
        'default' => true,
    ),
    'CONTACT_NAME' => array(
        'width' => '30%',
        'label' => 'LBL_CONTACT',
        'link' => true,
        'default' => true,
        'sortable' => false,
        'id' => 'CONTACT_ID',
        'module' => 'PPT_Contacts',
    ),
    'STATUS' =>
        array (
            'type' => 'enum',
            'default' => true,
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
            'sortable' => false,
            'width' => '10%',
        ),
);

