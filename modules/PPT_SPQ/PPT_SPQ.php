<?php

require_once ('include/SugarObjects/templates/basic/Basic.php');

class PPT_SPQ extends Basic
{
    public $new_schema = true;
    public $module_dir = 'PPT_SPQ';
    public $object_name = 'PPT_SPQ';
    public $table_name = 'ppt_spq';
    public $importable = true;
    public $acltype = 'module';
    public $acl_category = 'PPT_SPQ';

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
    public $air_waybill;
    public $origin;
    public $dest;
    public $service;
    public $product;
    public $c_weight;
    public $rate;
    public $issue;
    public $valid_from;
    public $currency;
    public $nature_of_goods;

    //flags
    public $capri;
    public $add_hoc;
    public $high_dense;
    public $freight_material;
    public $lost_business;
    public $fup;
    public $proactive_call;


    //related
    public $account_id;
    public $account_name;
    public $shipper_id;
    public $shipper_name;
    public $contact_id;
    public $contact_name;

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
        'contact_id' => 'ppt_contacts',
    );

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }

    public function create_new_list_query($order_by, $where, $filter = array(),
                                          $params = array(), $show_deleted = 0,
                                          $join_type = '', $return_array = false,
                                          $parentbean = null, $singleSelect = false, $ifListForExport = false)
    {
        return $this->create_basic_list_query($order_by, $where, $filter,
            $params, $show_deleted, $join_type, $return_array,
            $parentbean, $singleSelect, $ifListForExport);

    }

    private function create_basic_list_query($order_by, $where, $filter = array(),
                                             $params = array(), $show_deleted = 0,
                                             $join_type = '', $return_array = false,
                                             $parentbean = null, $singleSelect = false, $ifListForExport = false)
    {
        $custom_join = $this->getCustomJoin();

        $select_query = "SELECT ";
        $select_query .= "
            ppt_spq.*,
            accounts.name AS account_name,
            accounts.id AS account_id,
            shippers.name AS shipper_name,
            shippers.id AS shipper_id ";
        $select_query .= $custom_join['select'];
        $ret_array['select'] = $select_query;

        $from_query = " FROM ppt_spq ";
        $from_query .= "
            LEFT JOIN ppt_accounts AS accounts ON ppt_spq.account_id=accounts.id AND accounts.deleted=0 ";
        $from_query .= "
            LEFT JOIN ppt_accounts AS shippers ON ppt_spq.shipper_id=shippers.id AND shippers.deleted=0 ";
        $from_query .= $custom_join['join'];

        $ret_array['from'] = $from_query;
        $ret_array['from_min'] = 'from ppt_spq';

        $where_auto = '1=1';

        if ($show_deleted == 0) {
            $where_auto = " ppt_spq.deleted=0 ";
            //$where_auto .= " AND accounts.deleted=0  ";
        } else if ($show_deleted == 1) {
            $where_auto = " ppt_spq.deleted=1 ";
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

            $this->name = 'S' . $prefix . $this->number;
        }

        return parent::save($check_notify);
    }


}