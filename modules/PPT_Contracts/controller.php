<?php


require_once('include/MVC/Controller/SugarController.php');

class PPT_ContractsController extends SugarController {
    function action_editview() {

        $this->view = 'edit';
        $GLOBALS['view'] = $this->view;

        if (isset($_REQUEST['ppt_account_id'])) {
            $this->bean->account_id = $_REQUEST['ppt_account_id'];
            $this->bean->account_name = $_REQUEST['ppt_account_name'];
        }

    }
}