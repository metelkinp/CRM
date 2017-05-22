<?php

$layout_defs['PPT_Accounts'] = array (
    'subpanel_setup' => array (
        'ppt_contacts' => array(
            'order' => '50',
            'module' => 'PPT_Contacts',
            'sort_order' => 'asc',
            'sort_by' => 'name',
            'subpanel_name' => 'ForAccount',
            'get_subpanel_data' => 'ppt_contacts',
            'add_subpanel_data' => 'ppt_contact_id',
            'title_key' => 'LBL_SUBPANEL_CONTACTS',
            'top_buttons' => array(
                array(
                    'widget_class' => 'SubPanelTopCreateButton',
                ),
            ),
        ),

        'ppt_contracts' => array(
            'order' => '100',
            'module' => 'PPT_Contracts',
            'sort_order' => 'desc',
            'sort_by' => 'date_modified',
            'subpanel_name' => 'ForAccount',
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
            'order' => '250',
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

        'ppt_spq' => array(
            'order' => '200',
            'module' => 'PPT_SPQ',
            'sort_order' => 'desc',
            'sort_by' => 'date_modified',
            'subpanel_name' => 'ForAccount',
            'get_subpanel_data' => 'ppt_spq',
            'add_subpanel_data' => 'ppt_spq_id',
            'title_key' => 'LBL_SUBPANEL_SPQ',
            'top_buttons' => array(
                array(
                    'widget_class' => 'SubPanelTopCreateButton',
                ),
            ),
        ),


    ),
);