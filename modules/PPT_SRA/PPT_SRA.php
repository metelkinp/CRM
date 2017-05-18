<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

require_once('include/SugarObjects/templates/basic/Basic.php');

class PPT_SRA extends Basic
{
    public $new_schema = true;
    public $module_dir = 'PPT_SRA';
    public $object_name = 'PPT_SRA';
    public $table_name = 'ppt_sra';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public $number;
    public $origin;
    public $dest;
    public $service;
    public $product;
    public $capri;
    public $issue;
    public $valid_from;
    public $valid_until;
    public $currency;
    public $min_field;
    public $n_field;

    public $rates;
    public $rates_count;

    //related
    public $account_id;
    public $account_name;
    public $shipper_id;
    public $shipper_name;
    public $contact_id;
    public $contact_name;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }

    public function create_new_list_query($order_by, $where, $filter = array(), $params = array(), $show_deleted = 0, $join_type = '', $return_array = false, $parentbean = null, $singleSelect = false, $ifListForExport = false)
    {
        $custom_join = $this->getCustomJoin();

        $select_query = "SELECT ";
        $select_query .= "
            ppt_sra.*,
            accounts.name AS account_name,
            accounts.id AS account_id,
            shippers.name AS shipper_name,
            shippers.id AS shipper_id ";
        $select_query .= $custom_join['select'];
        $ret_array['select'] = $select_query;

        $from_query = " FROM ppt_sra ";
        $from_query .= "
            LEFT JOIN ppt_accounts AS accounts ON ppt_sra.account_id=accounts.id AND accounts.deleted=0 ";
        $from_query .= "
            LEFT JOIN ppt_accounts AS shippers ON ppt_sra.shipper_id=shippers.id AND shippers.deleted=0 ";
        $from_query .= $custom_join['join'];

        $ret_array['from'] = $from_query;
        $ret_array['from_min'] = 'from ppt_sra';

        $where_auto = '1=1';

        if ($show_deleted == 0) {
            $where_auto = " ppt_sra.deleted=0 ";
            //$where_auto .= " AND accounts.deleted=0  ";
        } else if ($show_deleted == 1) {
            $where_auto = " ppt_sra.deleted=1 ";
        }

        if ($where != "") {
            $where_query = "where ($where) AND " . $where_auto;
        } else {
            $where_query = "where " . $where_auto;
        }

        $ret_array['where'] = $where_query;
        $ret_array['order_by'] = '';

        //process order by and add if it's not empty
        $order_by = $this->process_order_by($order_by);
        if (!empty($order_by)) {
            $ret_array['order_by'] = ' ORDER BY ' . $order_by;
        }

        if ($return_array) {
            return $ret_array;
        }

        return $ret_array['select'] . $ret_array['from'] . $ret_array['where'] . $ret_array['order_by'];

    }


    public function save($check_notify = false)
    {
        if ($this->number == 0) {
            $this->number = $this->db->getOne("SELECT MAX(number) + 1 FROM " . $this->table_name);

            if (!isset($this->number))
                $this->number = 1;

            $prefix = ($this->number > 999) ? "" :
                ($this->number > 99) ? "0" :
                    ($this->number > 9) ? "00" : "000";

            $this->name = 'L' . $prefix . $this->number;
        }

        return parent::save($check_notify);
    }


}