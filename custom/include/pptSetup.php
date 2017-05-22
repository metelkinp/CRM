<?php

function pptSetup()
{
    $db = $GLOBALS['db'];
    if (isset($db)) {
        $db_defs = array(
            'ppt-airports-dom' => array(
                'field' => 'code',
                //'table' => 'ppt_airports',
                'table' => 'ppt_tmp_destinations',
            ),
            'ppt-services-dom' => array(
                'field' => 'service',
                'table' => 'ppt_services',
            ),
            'ppt-products-dom' => array(
                'field' => 'product',
                'table' => 'ppt_products',
            ),
            'ppt-stations-dom' => array(
                'field' => 'code',
                //'table' => 'ppt_stations',
                'table' => 'ppt_tmp_destinations',
            ),
            'ppt-company-types-dom' => array(
                'field' => 'company_type',
                'table' => 'ppt_company_types',
            ),
            'ppt-industries-dom' => array(
                'field' => 'industry',
                'table' => 'ppt_industries',
            ),
            'ppt-sales-level-6-dom' => array(
                'field' => 'level',
                'table' => 'ppt_sales_level_6',
            ),
            'ppt-account-roles-dom' => array(
                'field' => 'role',
                'table' => 'ppt_account_roles',
            ),
            'ppt-commodity-types-dom' => array(
                'field' => 'scc',
                'table' => 'ppt_cmdt_types',
            ),

        );

        $file = fopen('include/language/en_us.lang.ppt.php', 'w');
        $str = "<?php \r\n";

        foreach ($db_defs as $k => $v) {
            if (isset($k)) {

                $str .= '$app_list_strings[\'' . $k . '\'] = array(';

                $field = $v['field'];

                $sql = "SELECT DISTINCT " . $field . " FROM " . $v['table'];
                $result = $db->query($sql);

                while (($row = $db->fetchRow($result)) != null) {
                    $str .= '\'' . $row[$field] . '\' => \'' . $row[$field] . '\',';
                }
                $str .= ');' . "\r\n";
            }
        }

        $str .= '$app_list_strings[\'ppt-positions-dom\'] = array(
        \'L1O\' => \'Level 1 Operations\',
        \'L1S\' => \'Level 1 Sales\',
        \'L2O\' => \'Level 2 Operations\',
        \'L2S\' => \'Level 2 Sales\',
        \'M&A\' => \'Marketing & Administration\',
        \'S\' => \'Sales\',
        \'TLM\' => \'Top Level Management\');' . "\r\n";

        $str .= '$app_list_strings[\'ppt-genders-dom\'] = array(
        \'M\' => \'Male\',
        \'F\' => \'Female\');' . "\r\n";

        $str .= '$app_list_strings[\'ppt-pref-comm-dom\'] = array(
        \'Main\' => \'Main Phone\',
        \'Mob\' => \'Mobile Phone\',
        \'Fax\' => \'Fax\',
        \'Email\' => \'Email\',
        \'Other\' => \'Other\');' . "\r\n";

        fwrite($file, $str);
        fclose($file);

        $GLOBALS['ppt_domains'] = true;

        //User management bug fix
        global $ACLActions;

        $modules = array(
            'PPT_Accounts',
            'PPT_Contacts',
            'PPT_Contracts',
            'PPT_SRA'
        );

        foreach ($ACLActions['module']['actions'] as $action_name => $action_def) {
            $type = 'module';

            foreach ($modules as $module) {
                $query = "SELECT * FROM acl_actions WHERE name='$action_name' AND category = '$module' AND acltype='$type' AND deleted=0 ";
                $result = $db->query($query);
                //only add if an action with that name and category don't exist
                $row=$db->fetchByAssoc($result);

                if ($row == null) {
                    $ac_id = create_guid();
                    $ac_date = $GLOBALS['timedate']->nowDb();
                    $ac_access = $action_def['default'];

                    $query = "INSERT INTO acl_actions (id, date_entered, date_modified, modified_user_id, created_by, name, category, acltype, aclaccess, deleted)" .
                        " VALUES('$ac_id', '$ac_date', '$ac_date', 1, 1, '$action_name', '$module', '$type', '$ac_access', 0)";

                    $db->query($query);
                }
            }
//
//            $action = new ACLAction();
//            $action->name = $action_name;
//            $action->category = 'PPT_Contacts';
//            $action->aclaccess = $action_def['default'];
//            $action->acltype = 'module';
//            $action->modified_user_id = 1;
//            $action->created_by = 1;
//            $action->save();
        }
    }

}

;