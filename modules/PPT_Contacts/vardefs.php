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

$dictionary['PPT_Contact'] = array(
    'table' => 'ppt_contacts',
    'audited' => false,
    'inline_edit' => true,
    'duplicate_merge' => 'disabled',
    'fields' => array (
        'active_flag' => array(
            'name' => 'active_flag',
            'vname' => 'LBL_ACTIVE_FLAG',
            'type' => 'bool',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
            'default' => 1,
        ),
        'first_name' => array(
            'name' => 'first_name',
            'vname' => 'LBL_FIRST_NAME',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'last_name' => array(
            'name' => 'last_name',
            'vname' => 'LBL_LAST_NAME',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => true,
            'massupdate' => false,
        ),
        'salutation' => array(
            'name' => 'salutation',
            'vname' => 'LBL_SALUTATION',
            'type' => 'enum',
            'len' => '100',
            'options' => 'salutation_dom',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => true,
            'massupdate' => false,
        ),
        'position' => array(
            'name' => 'position',
            'vname' => 'LBL_POSITION',
            'type' => 'enum',
            'len' => '100',
            'options' => 'ppt-positions-dom',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => true,
            'massupdate' => false,
        ),
        'job_title' => array(
            'name' => 'job_title',
            'vname' => 'LBL_JOB_TITLE',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => true,
            'massupdate' => false,
        ),
        'department' => array(
            'name' => 'department',
            'vname' => 'LBL_DEPARTMENT',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'gender' => array(
            'name' => 'gender',
            'vname' => 'LBL_GENDER',
            'type' => 'enum',
            'len' => '100',
            'options' => 'ppt-genders-dom',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => true,
            'massupdate' => false,
        ),
        'academic_title' => array(
            'name' => 'academic_title',
            'vname' => 'LBL_ACADEMIC_TITLE',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'honorous_title' => array(
            'name' => 'honorous_title',
            'vname' => 'LBL_HONOROUS_TITLE',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'nickname' => array(
            'name' => 'nickname',
            'vname' => 'LBL_NICKNAME',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'phone_main' => array(
            'name' => 'phone_main',
            'vname' => 'LBL_PHONE_MAIN',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => '150',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'phone_mobile' => array(
            'name' => 'phone_mobile',
            'vname' => 'LBL_PHONE_MOBILE',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => '150',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'fax' => array(
            'name' => 'fax',
            'vname' => 'LBL_FAX',
            'type' => 'phone',
            'dbType' => 'varchar',
            'len' => '150',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'email' => array(
            'name' => 'email',
            'vname' => 'LBL_EMAIL',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'pref_comm' => array(
            'name' => 'pref_comm',
            'vname' => 'LBL_PREF_COMM',
            'type' => 'enum',
            'len' => '100',
            'options' => 'ppt-pref-comm-dom',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'pref_lang' => array(
            'name' => 'pref_lang',
            'vname' => 'LBL_PREF_LANG',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'birthday' => array(
            'name' => 'birthday',
            'vname' => 'LBL_BIRTHDAY',
            'type' => 'date',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'eBook_login' => array(
            'name' => 'eBook_login',
            'vname' => 'LBL_EBOOK_LOGIN',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),

        'address_business_street' => array(
            'name' => 'address_business_street',
            'vname' => 'LBL_ADDRESS_STREET',
            'type' => 'varchar',
            'len' => '150',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_business_lane' => array(
            'name' => 'address_business_lane',
            'vname' => 'LBL_ADDRESS_LANE',
            'type' => 'varchar',
            'len' => '100',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_business_po_box' => array(
            'name' => 'address_business_po_box',
            'vname' => 'LBL_ADDRESS_PO_BOX',
            'type' => 'varchar',
            'len' => '50',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_business_zip' => array(
            'name' => 'address_business_zip',
            'vname' => 'LBL_ADDRESS_ZIP',
            'type' => 'varchar',
            'len' => '50',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_business_city' => array(
            'name' => 'address_business_city',
            'vname' => 'LBL_ADDRESS_CITY',
            'type' => 'varchar',
            'len' => '100',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_business_state' => array(
            'name' => 'address_business_state',
            'vname' => 'LBL_ADDRESS_STATE',
            'type' => 'varchar',
            'len' => '100',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_business_country' => array(
            'name' => 'address_business_country',
            'vname' => 'LBL_ADDRESS_COUNTRY',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),

        'address_personal_street' => array(
            'name' => 'address_personal_street',
            'vname' => 'LBL_ADDRESS_STREET',
            'type' => 'varchar',
            'len' => '150',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_personal_lane' => array(
            'name' => 'address_personal_lane',
            'vname' => 'LBL_ADDRESS_LANE',
            'type' => 'varchar',
            'len' => '100',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_personal_po_box' => array(
            'name' => 'address_personal_po_box',
            'vname' => 'LBL_ADDRESS_PO_BOX',
            'type' => 'varchar',
            'len' => '50',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_personal_zip' => array(
            'name' => 'address_personal_zip',
            'vname' => 'LBL_ADDRESS_ZIP',
            'type' => 'varchar',
            'len' => '50',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_personal_city' => array(
            'name' => 'address_personal_city',
            'vname' => 'LBL_ADDRESS_CITY',
            'type' => 'varchar',
            'len' => '100',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_personal_state' => array(
            'name' => 'address_personal_state',
            'vname' => 'LBL_ADDRESS_STATE',
            'type' => 'varchar',
            'len' => '100',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),
        'address_personal_country' => array(
            'name' => 'address_personal_country',
            'vname' => 'LBL_ADDRESS_COUNTRY',
            'type' => 'varchar',
            'len' => '255',
            'size' => '20',
            'importable' => true,
            'reportable' => true,
            'required' => false,
            'massupdate' => false,
        ),

        //relations
        'account_id' => array(
            'name' => 'account_id',
            'rname' => 'id',
            'id_name' => 'account_id',
            'type' => 'id',
            'dbType' => 'id',
            'table' => 'ppt_accounts',
            'module' => 'PPT_Accounts',
            'isnull' => 'false',
            'vname' => 'LBL_ACCOUNT_ID',
            'reportable' => true,
            'massupdate' => false,
            'inline_edit' => false,
        ),
        'account_name' => array(
            'name' => 'account_name',
            'vname' => 'LBL_ACCOUNT',
            'type' => 'relate',
            'len' => 255,
            'required' => true,
            'massupdate' => 0,
            'rname' => 'name',
            'id_name' => 'account_id',
            'source' => 'non-db',
            'duplicate_merge' => 'disabled',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'table' => 'ppt_accounts',
            'module' => 'PPT_Accounts',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
        ),

        'ppt_accounts' => array(
            'name' => 'ppt_accounts',
            'type' => 'link',
            'relationship' => 'account_contacts',
            'link_type' => 'one',
            'source' => 'non-db',
            'vname' => 'LBL_ACCOUNT',
        ),

        'ppt_contracts' => array(
            'name' => 'ppt_contracts',
            'type' => 'link',
            'relationship' => 'contact_contracts',
            'source' => 'non-db',
            'module' => 'PPT_Contracts',
            'bean_name' => 'PPT_Contract',
        ),

        'ppt_sra' => array(
            'name' => 'ppt_sra',
            'type' => 'link',
            'relationship' => 'contact_sra',
            'source' => 'non-db',
            'module' => 'PPT_SRA',
            'bean_name' => 'PPT_SRA',
        ),

),
    'indices' => array(
        array(
            'name' => 'idx_name',
            'type' => 'index',
            'fields' => array('name'),
        ),
        array(
            'name' => 'idx_last_first_name',
            'type' => 'index',
            'fields' => array('last_name','first_name'),
        ),
        array(
            'name' => 'idx_account',
            'type' => 'index',
            'fields' => array('account_id'),
        ),
    ),
    'relationships' => array (
        'contact_sra' => array(
            'lhs_module' => 'PPT_Contacts',
            'lhs_table' => 'ppt_contacts',
            'lhs_key' => 'id',
            'rhs_module' => 'PPT_SRA',
            'rhs_table' => 'ppt_sra',
            'rhs_key' => 'contact_id',
            'relationship_type' => 'one-to-many',
        ),
        'contact_contracts' => array(
            'lhs_module' => 'PPT_Contacts',
            'lhs_table' => 'ppt_contacts',
            'lhs_key' => 'id',
            'rhs_module' => 'PPT_Contracts',
            'rhs_table' => 'ppt_contracts',
            'rhs_key' => 'contact_id',
            'relationship_type' => 'one-to-many',
        ),
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('PPT_Contacts', 'PPT_Contact', array('basic','assignable','security_groups'));