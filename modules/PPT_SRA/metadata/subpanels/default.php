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

$module_name = 'PPT_SRA';
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
            'width' => '10%',
        ),
        'account_name' => array(
            'name' => 'account_name',
            'vname' => 'LBL_ACCOUNT',
            'module' => 'PPT_Accounts',
            'target_record_key' => 'account_id',
            'target_module' => 'PPT_Accounts',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '15%'
        ),
        'account_id' => array(
            'name' => 'account_id',
            'usage' => 'query_only',
        ),
        'origin' => array(
            'name' => 'origin',
            'vname' => 'LBL_ORIGIN',
            'width' => '5%',
        ),
        'dest' => array(
            'name' => 'dest',
            'vname' => 'LBL_DEST',
            'width' => '5%',
        ),
        'service' => array(
            'name' => 'service',
            'vname' => 'LBL_SERVICE',
            'width' => '10%',
            'sortable' => false,
        ),
        'min_field' => array(
            'name' => 'min_field',
            'vname' => 'LBL_MIN',
            'width' => '5%',
            'sortable' => false,
        ),
        'n_field' => array(
            'name' => 'n_field',
            'vname' => 'LBL_N',
            'width' => '5%',
            'sortable' => false,
        ),
//        'r_45kg' => array(
//            'name' => 'r_45kg',
//            'vname' => 'LBL_45KG',
//            'width' => '5%',
//            'sortable' => false,
//        ),
//        'r_100kg' => array(
//            'name' => 'r_100kg',
//            'vname' => 'LBL_100KG',
//            'width' => '5%',
//            'sortable' => false,
//        ),
//        'r_300kg' => array(
//            'name' => 'r_300kg',
//            'vname' => 'LBL_300KG',
//            'width' => '5%',
//            'sortable' => false,
//        ),
//        'r_500kg' => array(
//            'name' => 'r_500kg',
//            'vname' => 'LBL_500KG',
//            'width' => '5%',
//            'sortable' => false,
//        ),
//        'r_1000kg' => array(
//            'name' => 'r_1000kg',
//            'vname' => 'LBL_1000KG',
//            'width' => '5%',
//            'sortable' => false,
//        ),
        'valid_from' => array(
            'name' => 'valid_from',
            'vname' => 'LBL_VALID_FROM',
            'width' => '10%',
        ),
        'valid_until' => array(
            'name' => 'valid_until',
            'vname' => 'LBL_VALID_UNTIL',
            'width' => '10%',
        ),
//        'date_modified' => array(
//            'vname' => 'LBL_DATE_MODIFIED',
//            'width' => '%',
//        ),
//        'edit_button' => array(
//            'vname' => 'LBL_EDIT_BUTTON',
//            'widget_class' => 'SubPanelEditButton',
//            'module' => $module_name,
//            'width' => '%',
//        ),
//        'remove_button' => array(
//            'vname' => 'LBL_REMOVE',
//            'widget_class' => 'SubPanelRemoveButton',
//            'module' => $module_name,
//            'width' => '%',
//        ),
    ),
);
