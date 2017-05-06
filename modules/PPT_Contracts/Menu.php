<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if(ACLController::checkAccess('PPT_Contracts', 'edit', true)){
    $module_menu[]=array('index.php?module=PPT_Contracts&action=EditView&return_module=PPT_Contracts&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add');
}
if(ACLController::checkAccess('PPT_Contracts', 'list', true)){
    $module_menu[]=array('index.php?module=PPT_Contracts&action=index&return_module=PPT_Contracts&return_action=DetailView', $mod_strings['LNK_LIST'],'List');
}
