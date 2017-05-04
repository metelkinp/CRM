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

        $file = fopen('include/language/en_us.lang.ppt.php','w');
        $str = "<?php \r\n";

        foreach ($db_defs as $k => $v) {
            if (isset($k)) {

                $str .= '$app_list_strings[\''. $k . '\'] = array(';

                $field = $v['field'];

                $sql = "SELECT DISTINCT ". $field . " FROM " . $v['table'];
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

    }
}

;