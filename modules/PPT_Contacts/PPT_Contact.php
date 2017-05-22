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

class PPT_Contact extends Basic
{
    public $new_schema = true;
    public $module_dir = 'PPT_Contacts';
    public $object_name = 'PPT_Contact';
    public $table_name = 'ppt_contacts';
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

    public $first_name;
    public $last_name;
    public $salutation;
    public $position;
    public $job_title;
    public $department;
    public $gender;
    public $academic_title;
    public $honorous_title;
    public $nickname;
    public $phone_main;
    public $phone_mobile;
    public $fax;
    public $email;
    public $pref_comm;
    public $pref_lang;
    public $birthday;
    public $eBook_login;
    public $active_flag;

    public $address_business_street;
    public $address_business_lane;
    public $address_business_po_box;
    public $address_business_zip;
    public $address_business_city;
    public $address_business_state;
    public $address_business_country;

    public $address_personal_street;
    public $address_personal_lane;
    public $address_personal_po_box;
    public $address_personal_zip;
    public $address_personal_city;
    public $address_personal_state;
    public $address_personal_country;

    //relations
    public $account_id;
    public $account_name;
    public $ppt_contract_id;
    public $ppt_sra_id;
    public $ppt_spq_id;

    public $additional_column_fields = Array(
        'assigned_user_name',
        'account_name',
        'account_id',
        'ppt_contract_id',
        'ppt_sra_id',
        'ppt_spq_id',
    );

    public $relationship_fields = Array(
        'account_id' => 'ppt_accounts',
        'ppt_contract_id' => 'ppt_contracts',
        'ppt_sra_id' => 'ppt_sra',
        'ppt_spq_id' => 'ppt_spq',
    );

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }

    function add_list_count_joins(&$query, $where)
    {
        if (stristr($where, "ppt_accounts.name")) {
            $query .= "
                LEFT JOIN ppt_accounts
                ON ppt_contacts.account_id = ppt_accounts.id
            ";
        }
        $custom_join = $this->getCustomJoin();
        $query .= $custom_join['join'];
    }

    function create_new_list_query($order_by, $where, $filter = array(), $params = array(), $show_deleted = 0, $join_type = '',
                                   $return_array = false, $parentbean = null, $singleSelect = false, $ifListForExport = false)
    {
        //in popup case from module with account_id
        if ($_REQUEST['action'] == 'Popup' && isset($_REQUEST['account_id']) && !empty($_REQUEST['account_id'])) {
            return $this->create_list_filtered_by_account($_REQUEST['account_id'], $show_deleted, $order_by, $return_array);
        } else {
            return $this->create_basic_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type,
                $return_array, $parentbean, $singleSelect, $ifListForExport);
        }

    }

    private function create_list_filtered_by_account($acc_id, $show_deleted, $order_by, $return_array)
    {
        $custom_join = $this->getCustomJoin();
        $select_query = "SELECT ";
        $select_query .= "
            ppt_contacts.* ";

        $select_query .= $custom_join['select'];
        $ret_array['select'] = $select_query;

        $from_query = "
            FROM ppt_contacts ";

        $from_query .= $custom_join['join'];

        $ret_array['from'] = $from_query;
        $ret_array['from_min'] = 'from ppt_contacts';

        $where_auto = '1=1';

        if ($show_deleted == 0) {
            $where_auto = " ppt_contacts.deleted=0 ";
            //$where_auto .= " AND accounts.deleted=0  ";
        } else if ($show_deleted == 1) {
            $where_auto = " ppt_contacts.deleted=1 ";
        }

        $where_query = "WHERE ppt_contacts.account_id='$acc_id' AND" . $where_auto;

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

    private function create_basic_list_query($order_by, $where, $filter = array(), $params = array(), $show_deleted = 0, $join_type = '',
                                             $return_array = false, $parentbean = null, $singleSelect = false, $ifListForExport = false)
    {
        $custom_join = $this->getCustomJoin();
        $select_query = "SELECT ";
        $select_query .= "
            ppt_contacts.*,
            ppt_accounts.name as account_name,
            ppt_accounts.id as account_id ";
//            ppt_accounts.assigned_user_id account_id_owner,
//            users.user_name as assigned_user_name ";
        $select_query .= $custom_join['select'];
        $ret_array['select'] = $select_query;

        $from_query = "
            FROM ppt_contacts ";

//        $from_query .= "
//            LEFT JOIN users
//            ON ppt_contacts.assigned_user_id=users.id
        $from_query .= "
            LEFT JOIN ppt_accounts
            ON ppt_contacts.account_id=ppt_accounts.id AND ppt_accounts.deleted=0 ";
        $from_query .= $custom_join['join'];

        $ret_array['from'] = $from_query;
        $ret_array['from_min'] = 'from ppt_contacts';

        $where_auto = '1=1';

        if ($show_deleted == 0) {
            $where_auto = " ppt_contacts.deleted=0 ";
            //$where_auto .= " AND accounts.deleted=0  ";
        } else if ($show_deleted == 1) {
            $where_auto = " ppt_contacts.deleted=1 ";
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
        $this->name = $this->first_name . ' ' . $this->last_name;

        return parent::save($check_notify);
    }


}