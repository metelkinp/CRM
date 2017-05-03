<?php

$layout_defs['myppt_Account'] = array (
    'subpanel_setup' => array (
        'myppt_SRA' => array (
            'order' => '250',
            'module' => 'myppt_SRA',
            'sort_order' => 'desc',
            'sort_by' => 'id',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'myppt_sra',
            //'add_subpanel_data' => 'agent_id',
            'title_key' => 'LBL_MYPPT_SRA_SUBPANEL_TITLE',
//            'top_buttons' => array(
//                array(
//                    'widget_class' => 'SubPanelTopCreateButton',
//                ),
//            ),
        ),
        'myppt_SPQ' => array(
            'order' => '200',
            'module' => 'myppt_SPQ',
            'sort_order' => 'desc',
            'sort_by' => 'id',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'myppt_spq',
            'title_key' => 'LBL_MYPPT_SPQ_SUBPANEL_TITLE',
        ),
        'myppt_PA' => array(
            'order' => '150',
            'module' => 'myppt_PA',
            'sort_order' => 'desc',
            'sort_by' => 'id',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'myppt_pa',
            'title_key' => 'LBL_MYPPT_PA_SUBPANEL_TITLE',
        ),
        'myppt_Contracts' => array(
            'order' => '100',
            'module' => 'myppt_Contracts',
            'sort_order' => 'desc',
            'sort_by' => 'id',
            'subpanel_name' => 'ForAccount',
            'get_subpanel_data' => 'myppt_contracts',
            'title_key' => 'LBL_MYPPT_CONTRACTS_SUBPANEL_TITLE',
        ),
        'myppt_Contact' => array(
            'order' => '50',
            'module' => 'myppt_Contact',
            'sort_order' => 'desc',
            'sort_by' => 'id',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'myppt_contact',
            'title_key' => 'LBL_MYPPT_CONTACT_SUBPANEL_TITLE',
        ),

    ),
);