<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'PPT_Contracts';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'module' => $module_name,
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
        ),
        'account_name' => array(
            'name' => 'account_name',
            'vname' => 'LBL_ACCOUNT',
            'module' => 'PPT_Accounts',
            'target_record_key' => 'account_id',
            'target_module' => 'PPT_Accounts',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '15%'
        ),
        'account_id' => array(
            'name' => 'account_id',
            'usage' => 'query_only',
        ),
        'origin' => array(
            'name' => 'origin',
            'vname' => 'LBL_ORIGIN',
            'width' => '5%',
        ),
        'dest' => array(
            'name' => 'dest',
            'vname' => 'LBL_DEST',
            'width' => '5%',
        ),
        'service' => array(
            'name' => 'service',
            'vname' => 'LBL_SERVICE',
            'width' => '10%',
            'sortable' => false,
        ),
        'contact_name' => array(
            'name' => 'contact_name',
            'vname' => 'LBL_CONTACT_NAME',
            'module' => 'PPT_Contacts',
            'target_record_key' => 'contact_id',
            'target_module' => 'PPT_Contacts',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
            'sortable' => false,
        ),
        'contact_id' => array(
            'name' => 'contact_id',
            'usage' => 'query_only',
        ),
        'status' => array(
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'width' => '5%',
            'sortable' => false,
        ),

//        'date_modified' => array(
//            'vname' => 'LBL_DATE_MODIFIED',
//            'width' => '%',
//        ),
//        'edit_button' => array(
//            'vname' => 'LBL_EDIT_BUTTON',
//            'widget_class' => 'SubPanelEditButton',
//            'module' => $module_name,
//            'width' => '%',
//        ),
//        'remove_button' => array(
//            'vname' => 'LBL_REMOVE',
//            'widget_class' => 'SubPanelRemoveButton',
//            'module' => $module_name,
//            'width' => '%',
//        ),
    ),
);