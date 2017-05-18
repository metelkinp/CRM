<?php

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
            'width' => '16%',
        ),
        'origin' => array(
            'name' => 'origin',
            'vname' => 'LBL_ORIGIN',
            'width' => '16%',
        ),
        'dest' => array(
            'name' => 'dest',
            'vname' => 'LBL_DEST',
            'width' => '16%',
        ),
        'service' => array(
            'name' => 'service',
            'vname' => 'LBL_SERVICE',
            'width' => '16%',
            'sortable' => false,
        ),
        'status' => array(
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'width' => '16%',
            'sortable' => false,
        ),
//        'date_modified' => array(
//            'vname' => 'LBL_DATE_MODIFIED',
//            'width' => '%',
//        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '16%',
        ),
    ),
);