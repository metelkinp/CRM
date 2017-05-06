<?php

require_once ('include/SugarObjects/templates/basic/Basic.php');

class PPT_Contract extends Basic
{
    public $new_schema = true;
    public $module_dir = 'PPT_Contracts';
    public $object_name = 'PPT_Contract';
    public $table_name = 'ppt_contracts';
    public $importable = true;

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

    public function save($check_notify = false)
    {
        if (empty($this->number)) {

            $this->number = $this->db->getOne("SELECT MAX(number) + 1 FROM " . $this->table_name);

            if (empty($this->number))
                $this->number = 1;

            $this->name = 'Contract #' . $this->number;
        }

        return parent::save($check_notify);
    }

}