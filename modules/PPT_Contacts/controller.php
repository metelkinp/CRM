<?php

require_once('include/MVC/Controller/SugarController.php');

class PPT_ContactsController extends SugarController {
    function action_editview() {

        $this->view = 'edit';
        $GLOBALS['view'] = $this->view;

        if (isset($_REQUEST['ppt_account_id'])) {
            $account = new PPT_Account();
            $account->retrieve($_REQUEST['ppt_account_id']);

            $this->bean->account_id = $account->id;
            $this->bean->account_name = $account->name;
            $this->bean->address_business_street = $account->address_street;
            $this->bean->address_business_lane = $account->address_lane;
            $this->bean->address_business_po_box = $account->address_po_box;
            $this->bean->address_business_zip = $account->address_zip;
            $this->bean->address_business_city = $account->address_city;
            $this->bean->address_business_state = $account->address_state;
            $this->bean->address_business_country = $account->address_country;
        }

    }
}