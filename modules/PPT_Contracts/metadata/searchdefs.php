<?php

$module_name = 'PPT_Contracts';
$searchdefs[$module_name] = array(
    'templateMeta' => array(
        'maxColumns' => '3',
        'maxColumnsBasic' => '4',
        'widths' => array('label' => '10', 'field' => '30'),
    ),
    'layout' => array(
        'basic_search' => array(
            'name',
            array ('name' => 'account_name', 'label' => 'LBL_ACCOUNT', 'type' => 'enum'),
            array('name' => 'current_user_only', 'label' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
        ),
        'advanced_search' => array(
            'name',
            array ('name' => 'account_name', 'label' => 'LBL_ACCOUNT', 'type' => 'enum'),
            array ('name' => 'shipper_name', 'label' => 'LBL_SHIPPER', 'type' => 'enum'),
            'origin',
            'dest',
            array('name' => 'service', 'label' => 'LBL_SERVICE', 'type' => 'enum'),
            array(
                'name' => 'assigned_user_id',
                'label' => 'LBL_ASSIGNED_TO',
                'type' => 'enum',
                'function' => array('name' => 'get_user_array', 'params' => array(false))
            ),
        ),
    ),
);