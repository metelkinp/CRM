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

$dictionary['PPT_SRA'] = array(
    'table' => 'ppt_sra',
    'audited' => false,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
//        'min_field' => array(
//            'name' => 'min_field',
//            'vname' => 'LBL_MIN',
//            'type' => 'int',
//            'dbType' => 'int',
//            'len' => '4',
//            'massupdate' => 0,
//            'duplicate_merge' => 'disabled',
//            'audited' => false,
//            'inline_edit' => true,
//
//        ),
//        'n_field' => array(
//            'name' => 'n_field',
//            'vname' => 'LBL_N',
//            'type' => 'float',
//            'dbType' => 'float',
//            'len' => '4',
//            'precision' => '2',
//            'massupdate' => 0,
//            'duplicate_merge' => 'disabled',
//            'audited' => false,
//            'inline_edit' => true,
//
//        ),
//        'r_45kg' => array(
//            'name' => 'r_45kg',
//            'vname' => 'LBL_45KG',
//            'type' => 'float',
//            'dbType' => 'float',
//            'len' => '4',
//            'precision' => '2',
//            'massupdate' => 0,
//            'duplicate_merge' => 'disabled',
//            'audited' => false,
//            'inline_edit' => true,
//
//        ),
//        'r_100kg' => array(
//            'name' => 'r_100kg',
//            'vname' => 'LBL_100KG',
//            'type' => 'float',
//            'dbType' => 'float',
//            'len' => '4',
//            'precision' => '2',
//            'massupdate' => 0,
//            'duplicate_merge' => 'disabled',
//            'audited' => false,
//            'inline_edit' => true,
//
//        ),
//        'r_300kg' => array(
//            'name' => 'r_300kg',
//            'vname' => 'LBL_300KG',
//            'type' => 'float',
//            'dbType' => 'float',
//            'len' => '4',
//            'precision' => '2',
//            'massupdate' => 0,
//            'duplicate_merge' => 'disabled',
//            'audited' => false,
//            'inline_edit' => true,
//
//        ),
//        'r_500kg' => array(
//            'name' => 'r_500kg',
//            'vname' => 'LBL_500KG',
//            'type' => 'float',
//            'dbType' => 'float',
//            'len' => '4',
//            'precision' => '2',
//            'massupdate' => 0,
//            'duplicate_merge' => 'disabled',
//            'audited' => false,
//            'inline_edit' => true,
//
//        ),
//        'r_1000kg' => array(
//            'name' => 'r_1000kg',
//            'vname' => 'LBL_1000KG',
//            'type' => 'float',
//            'dbType' => 'float',
//            'len' => '4',
//            'precision' => '2',
//            'massupdate' => 0,
//            'duplicate_merge' => 'disabled',
//            'audited' => false,
//            'inline_edit' => true,
//
//        ),
    ),
    'indices' => array (
//        0 => array(
//            'name' => 'idx_name',
//            'type' => 'unique',
//            'fields' => array('name'),
//        ),
    ),

    'relationships' => array(
//        strtolower($module)."_contracts" => array (
//            'lhs_module' => $module,
//            'lhs_table' => $table_name,
//            'lhs_key' => 'id',
//            'rhs_module' => 'myppt_Contracts',
//            'rhs_table' => 'myppt_contracts',
//            'rhs_key' => 'id',
//            'relationship_type' => 'many-to-many',
//            'join_table' => 'myppt_sra_contracts',
//            'join_key_lhs' => 'sra_id',
//            'join_key_rhs' => 'contract_id',
//        ),

    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('PPT_SRA', 'PPT_SRA', array('basic', 'assignable', 'security_groups'));