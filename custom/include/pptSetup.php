<?php

function pptSetup()
{
    $db = $GLOBALS['db'];
    if (isset($db)) {
        $db_defs = array(
            'ppt-airports-dom' => array(
                'field' => 'code',
                'table' => 'ppt_airports',
            ),
            'ppt-products-dom' => array(
                'field' => 'service',
                'table' => 'ppt_services',
            ),
            'ppt-services-dom' => array(
                'field' => 'product',
                'table' => 'ppt_products',
            ),
            'ppt-stations-dom' => array(
                'field' => 'code',
                'table' => 'ppt_stations',
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

        fwrite($file, $str);
        fclose($file);

        $GLOBALS['ppt_domains'] = true;

    }
}

;