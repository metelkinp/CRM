<?php

$layout_defs['PPT_Contacts'] = array(
    'subpanel_setup' => array(
        'ppt_contracts' => array(
            'order' => '50',
            'module' => 'PPT_Contracts',
            'sort_order' => 'desc',
            'sort_by' => 'date_modified',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'ppt_contracts',
            'add_subpanel_data' => 'ppt_contract_id',
            'title_key' => 'LBL_SUBPANEL_CONTRACTS',
            'top_buttons' => array(
                array(
                    'widget_class' => 'SubPanelTopCreateButton',
                ),
            ),
        ),

        'ppt_sra' => array(
            'order' => '100',
            'module' => 'PPT_SRA',
            'sort_order' => 'desc',
            'sort_by' => 'date_modified',
            'subpanel_name' => 'ForAccount',
            'get_subpanel_data' => 'ppt_sra',
            'add_subpanel_data' => 'ppt_sra_id',
            'title_key' => 'LBL_SUBPANEL_SRA',
            'top_buttons' => array(
                array(
                    'widget_class' => 'SubPanelTopCreateButton',
                ),
            ),
        ),
    ),
);