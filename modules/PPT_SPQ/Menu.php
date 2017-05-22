<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if(ACLController::checkAccess('PPT_SPQ', 'edit', true)){
    $module_menu[]=array('index.php?module=PPT_SPQ&action=EditView&return_module=PPT_SPQ&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add');
}
if(ACLController::checkAccess('PPT_SPQ', 'list', true)){
    $module_menu[]=array('index.php?module=PPT_SPQ&action=index&return_module=PPT_SPQ&return_action=DetailView', $mod_strings['LNK_LIST'],'List');
}
