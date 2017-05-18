<?php

require_once('include/MVC/Controller/SugarController.php');

class PPT_SRAController extends SugarController {
    function action_editview() {

        $this->view = 'edit';
        $GLOBALS['view'] = $this->view;

        //incoming call from Account (subpanel)
        if (isset($_REQUEST['ppt_account_id'])) {
            $this->bean->account_id = $_REQUEST['ppt_account_id'];
            $this->bean->account_name = $_REQUEST['ppt_account_name'];

        }

        //incoming call from Contact (subpanel)
        if (isset($_REQUEST['ppt_contact_id'])) {
            $this->bean->contact_id = $_REQUEST['ppt_contact_id'];
            $this->bean->contact_name = $_REQUEST['ppt_contact_name'];

            if (!isset($_REQUEST['ppt_account_id'])) {

                $query = "SELECT 
                          accounts.name, accounts.id 
                          FROM (SELECT * FROM ppt_contacts WHERE ppt_contacts.id='{$_REQUEST['ppt_contact_id']}') AS contacts
                          LEFT JOIN
                          (SELECT ppt_accounts.id, ppt_accounts.name FROM ppt_accounts) AS accounts
                          ON contacts.account_id=accounts.id";

                $result = $this->bean->db->query($query, true);
                $row = $this->bean->db->fetchByAssoc($result);

                $this->bean->account_name = $row['name'];
                $this->bean->account_id = $row['id'];

            }

        }

    }
}