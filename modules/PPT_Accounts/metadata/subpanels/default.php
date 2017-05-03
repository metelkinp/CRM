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

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'PPT_Accounts';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'module' => $module_name,
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '15%',
        ),
        'lavlsv_num' => array(
            'name' => 'lavlsv_num',
            'vname' => 'LBL_LAVLSV_NUM',
            'width' => '8%',
            'widget_class' => 'SubPanelDetailViewLink',
            'module' => $module_name,
        ),
        'station' => array(
            'width' => '8%',
            'vname' => 'LBL_STATION',
            'name' => 'station',
        ),
        'sales_level_6' => array(
            'width' => '8%',
            'label' => 'LBL_SALES_LEVEL_6',
            'name' => 'sales_level_6',
        ),
        'company_type' => array(
            'width' => '15%',
            'label' => 'LBL_COMPANY_TYPE',
            'name' => 'company_type',
        ),
        'industry_type' => array(
            'width' => '15%',
            'label' => 'LBL_INDUSTRY_TYPE',
            'name' => 'industry_type',
        ),
        'assigned_user_name' => array(
            'name' => 'assigned_user_name',
            'width' => '10%',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            'module' => 'Employees',
            'target_record_key' => 'assigned_user_id',
            'target_module' => 'Employees',
            'widget_class' => 'SubPanelDetailViewLink',
        ),
        'active_flag' => array(
            'width' => '8%',
            'label' => 'LBL_ACTIVE_FLAG',
            'name' => 'active_flag',
        ),
//        'date_modified' => array(
//            'vname' => 'LBL_DATE_MODIFIED',
//            'width' => '45%',
//        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '4%',
        ),
//        'remove_button' => array(
//            'vname' => 'LBL_REMOVE',
//            'widget_class' => 'SubPanelRemoveButton',
//            'module' => $module_name,
//            'width' => '5%',
//        ),
    ),
);
