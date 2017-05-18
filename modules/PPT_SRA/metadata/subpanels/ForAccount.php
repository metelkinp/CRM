<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'PPT_SRA';
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
            'module' => 'PPT_SRA',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
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
        'min_field' => array(
            'name' => 'min_field',
            'vname' => 'LBL_MIN',
            'width' => '5%',
            'sortable' => false,
        ),
        'n_field' => array(
            'name' => 'n_field',
            'vname' => 'LBL_N',
            'width' => '5%',
            'sortable' => false,
        ),
        'rates_count' => array(
            'name' => 'rates_count',
            'vname' => 'LBL_RATES',
            'width' => '10%',
        ),
        'valid_from' => array(
            'name' => 'valid_from',
            'vname' => 'LBL_VALID_FROM',
            'width' => '10%',
        ),
        'valid_until' => array(
            'name' => 'valid_until',
            'vname' => 'LBL_VALID_UNTIL',
            'width' => '10%',
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
