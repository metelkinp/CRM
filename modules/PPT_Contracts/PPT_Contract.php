<?php

require_once ('include/SugarObjects/templates/basic/Basic.php');

class PPT_Contract extends Basic
{
    public $new_schema = true;
    public $module_dir = 'PPT_Contracts';
    public $object_name = 'PPT_Contract';
    public $table_name = 'ppt_contracts';
    public $importable = true;
    public $acltype = 'module';
    public $acl_category = 'PPT_Contracts';

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_by_name;
    public $modified_user_id;
    public $created_by;
    public $created_by_name;
    public $deleted;
    public $description;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public $number;
    public $service;
    public $product;
    public $origin;
    public $dest;
    public $shipping_date;
    public $arrival_date;
    public $scc;            //commodity type
    public $iata_code;
    public $start_date;
    public $end_date;
    public $status;
    public $customer_signed_date;
    public $company_signed_date;

    //flight search
    public $flight_date;
    public $flight;         //this is a json-object, saved as text

    //cargo and line items section

    public $line_items;        //this is a json-object, saved as text
    // public $line_items_group;

    //rates section

    //relations
    public $account_name;
    public $account_id;
    public $shipper_name;
    public $shipper_id;
    public $contact_name;
    public $contact_id;

    public $additional_column_fields = Array(
        'assigned_user_name',
        'account_name',
        'account_id',
        'shipper_name',
        'shipper_id',
        'contact_name',
        'contact_id',
    );

    public $relationship_fields = Array(
        'account_id' => 'ppt_accounts',
        'shipper_id' => 'ppt_shippers',
        'contact_id' => 'ppt_contacts'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL' : return true;
        }

        return parent::bean_implements($interface);
    }

    public function create_new_list_query($order_by, $where, $filter = array(), $params = array(),
                                          $show_deleted = 0, $join_type = '', $return_array = false,
                                          $parentbean = null, $singleSelect = false, $ifListForExport = false)
    {
        return $this->create_basic_list_query($order_by, $where, $filter, $params,
            $show_deleted, $join_type, $return_array, $parentbean, $singleSelect, $ifListForExport);

    }

    private function create_basic_list_query($order_by, $where, $filter = array(), $params = array(),
                                             $show_deleted = 0, $join_type = '', $return_array = false,
                                             $parentbean = null, $singleSelect = false, $ifListForExport = false) {
        $custom_join = $this->getCustomJoin();

        $select_query = "SELECT ";
        $select_query .= "
            ppt_contracts.*,
            accounts.name AS account_name,
            accounts.id AS account_id,
            shippers.name AS shipper_name,
            shippers.id AS shipper_id,
            contacts.id AS contact_id,
            contacts.name AS contact_name ";
        $select_query .= $custom_join['select'];
        $ret_array['select'] = $select_query;

        $from_query = " FROM ppt_contracts ";
        $from_query .= "
            LEFT JOIN ppt_accounts AS accounts ON ppt_contracts.account_id=accounts.id AND accounts.deleted=0 ";
        $from_query .= "
            LEFT JOIN ppt_accounts AS shippers ON ppt_contracts.shipper_id=shippers.id AND shippers.deleted=0 ";
        $from_query .= "
            LEFT JOIN ppt_contacts AS contacts ON ppt_contracts.contact_id=contacts.id AND contacts.deleted=0 ";
        $from_query .= $custom_join['join'];

        $ret_array['from'] = $from_query;
        $ret_array['from_min'] = 'from ppt_contracts';

        $where_auto = '1=1';

        if ($show_deleted == 0) {
            $where_auto = " ppt_contracts.deleted=0 ";
            //$where_auto .= " AND accounts.deleted=0  ";
        } else if ($show_deleted == 1) {
            $where_auto = " ppt_contracts.deleted=1 ";
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

    public function getObjectName()
    {
        return parent::getObjectName();
    }

    public function getACLCategory()
    {
        return parent::getACLCategory();
    }

    public function save($check_notify = false)
    {
        if ($this->number == 0) {
            $this->number = $this->db->getOne("SELECT MAX(number) + 1 FROM " . $this->table_name);

            if (!isset($this->number))
                $this->number = 1;

            $this->name = 'Contract #' . $this->number;
        }

        return parent::save($check_notify);
    }

}