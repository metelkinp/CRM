<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'PPT_Contacts';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' =>  $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'salutation' => array(
            'sortable' => false,
            'name' => 'salutation',
            'vname' => 'LBL_SALUTATION',
            'width' => '5%',
        ),
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'width' => '20%',
            'widget_class' => 'SubPanelDetailViewLink',
            'module' => $module_name,
        ),
        'job_title' => array(
            'name' => 'job_title',
            'sortable' => false,
            'vname' => 'LBL_JOB_TITLE',
            'width' => '15%',
        ),
        'phone_main' => array(
            'name' => 'phone_main',
            'vname' => 'LBL_PHONE_MAIN',
            'sortable' => false,
            'width' => '15%',
        ),
        'phone_mobile' => array(
            'name' => 'phone_mobile',
            'vname' => 'LBL_PHONE_MOBILE',
            'sortable' => false,
            'width' => '15%',
        ),
        'email' => array(
            'name' => 'email',
            'vname' => 'LBL_EMAIL',
            'width' => '15%',
            'sortable' => false,
        ),
        'active_flag' => array(
            'name' => 'active_flag',
            'vname' => 'LBL_ACTIVE_FLAG',
            'width' => '5%',
        ),
    ),
);