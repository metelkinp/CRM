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

$dictionary['PPT_Contacts'] = array(
    'table' => 'ppt_contacts',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
//  'salutation' =>
//  array (
//    'name' => 'salutation',
//    'vname' => 'LBL_SALUTATION',
//    'type' => 'enum',
//    'options' => 'salutation_dom',
//    'massupdate' => 0,
//    'len' => 100,
//    'comment' => 'Contact salutation (e.g., Mr, Ms)',
//    'required' => true,
//    'no_default' => false,
//    'comments' => 'Contact salutation (e.g., Mr, Ms)',
//    'help' => '',
//    'importable' => 'required',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'size' => '20',
//    'studio' => 'visible',
//    'dependency' => false,
//  ),
//  'first_name' =>
//  array (
//    'name' => 'first_name',
//    'vname' => 'LBL_FIRST_NAME',
//    'type' => 'varchar',
//    'len' => '100',
//    'unified_search' => false,
//    'full_text_search' =>
//    array (
//      'boost' => 3,
//    ),
//    'comment' => 'First name of the contact',
//    'merge_filter' => 'disabled',
//    'required' => true,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'First name of the contact',
//    'help' => '',
//    'importable' => 'required',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'size' => '20',
//  ),
//  'last_name' =>
//  array (
//    'name' => 'last_name',
//    'vname' => 'LBL_LAST_NAME',
//    'type' => 'varchar',
//    'len' => '100',
//    'unified_search' => false,
//    'full_text_search' =>
//    array (
//      'boost' => 3,
//    ),
//    'comment' => 'Last name of the contact',
//    'merge_filter' => 'disabled',
//    'required' => true,
//    'importable' => 'required',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'Last name of the contact',
//    'help' => '',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'size' => '20',
//  ),
//  'title' =>
//  array (
//    'name' => 'title',
//    'vname' => 'LBL_TITLE',
//    'type' => 'varchar',
//    'len' => '255',
//    'comment' => 'The title of the contact',
//    'required' => true,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'required',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'size' => '20',
//  ),
//  'ppt_position' =>
//  array (
//    'required' => true,
//    'name' => 'ppt_position',
//    'vname' => 'LBL_PPT_POSITION',
//    'type' => 'dynamicenum',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'required',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => 100,
//    'size' => '20',
//    'options' => 'template_ddown_c_list',
//    'studio' => 'visible',
//    'dbType' => 'enum',
//    'parentenum' => '',
//  ),
//  'ppt_academ_title' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_academ_title',
//    'vname' => 'LBL_PPT_ACADEM_TITLE',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//  ),
//  'ppt_honorous_title' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_honorous_title',
//    'vname' => 'LBL_PPT_HONOROUS_TITLE',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//  ),
//  'ppt_nickname' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_nickname',
//    'vname' => 'LBL_PPT_NICKNAME',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//  ),
//  'ppt_manager_fname' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_manager_fname',
//    'vname' => 'LBL_PPT_MANAGER_FNAME',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//  ),
//  'ppt_manager_lname' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_manager_lname',
//    'vname' => 'LBL_PPT_MANAGER_LNAME',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//  ),
//  'ppt_pref_comm' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_pref_comm',
//    'vname' => 'LBL_PPT_PREF_COMM',
//    'type' => 'dynamicenum',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => 100,
//    'size' => '20',
//    'options' => 'ppt_pref_comm_list',
//    'studio' => 'visible',
//    'dbType' => 'enum',
//    'parentenum' => '',
//  ),
//  'ppt_sex' =>
//  array (
//    'required' => true,
//    'name' => 'ppt_sex',
//    'vname' => 'LBL_PPT_SEX',
//    'type' => 'enum',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => 100,
//    'size' => '20',
//    'options' => 'ppt_sex_list',
//    'studio' => 'visible',
//    'dependency' => false,
//  ),
//  'ppt_pref_lang' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_pref_lang',
//    'vname' => 'LBL_PPT_PREF_LANG',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//  ),
//  'ppt_nameday' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_nameday',
//    'vname' => 'LBL_PPT_NAMEDAY',
//    'type' => 'date',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'size' => '20',
//    'enable_range_search' => false,
//  ),
//  'ppt_birthday' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_birthday',
//    'vname' => 'LBL_PPT_BIRTHDAY',
//    'type' => 'date',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'size' => '20',
//    'enable_range_search' => false,
//  ),
//  'ppt_ebook_login' =>
//  array (
//    'required' => false,
//    'name' => 'ppt_ebook_login',
//    'vname' => 'LBL_PPT_EBOOK_LOGIN',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//  ),
//  'myppt_ppt_account_id_c' =>
//  array (
//    'required' => false,
//    'name' => 'myppt_ppt_account_id_c',
//    'vname' => 'LBL_PPT_ACCOUNT_MYPPT_PPT_ACCOUNT_ID',
//    'type' => 'id',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => 0,
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => false,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => 36,
//    'size' => '20',
//  ),
//  'ppt_account' =>
//  array (
//    'required' => true,
//    'source' => 'non-db',
//    'name' => 'ppt_account',
//    'vname' => 'LBL_PPT_ACCOUNT',
//    'type' => 'relate',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'required',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '255',
//    'size' => '20',
//    'id_name' => 'myppt_ppt_account_id_c',
//    'ext2' => 'myppt_PPT_Account',
//    'module' => 'myppt_PPT_Account',
//    'rname' => 'name',
//    'quicksearch' => 'enabled',
//    'studio' => 'visible',
//  ),
//  'primary_address_city' =>
//  array (
//    'name' => 'primary_address_city',
//    'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
//    'type' => 'varchar',
//    'len' => '100',
//    'group' => 'primary_address',
//    'comment' => 'City for primary address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'City for primary address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'primary_address_country' =>
//  array (
//    'name' => 'primary_address_country',
//    'vname' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
//    'type' => 'varchar',
//    'group' => 'primary_address',
//    'comment' => 'Country for primary address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'Country for primary address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'len' => '255',
//    'size' => '20',
//  ),
//  'primary_address_postalcode' =>
//  array (
//    'name' => 'primary_address_postalcode',
//    'vname' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
//    'type' => 'varchar',
//    'len' => '20',
//    'group' => 'primary_address',
//    'comment' => 'Postal code for primary address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'Postal code for primary address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'primary_address_state' =>
//  array (
//    'name' => 'primary_address_state',
//    'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
//    'type' => 'varchar',
//    'len' => '100',
//    'group' => 'primary_address',
//    'comment' => 'State for primary address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'State for primary address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'primary_address_street' =>
//  array (
//    'name' => 'primary_address_street',
//    'vname' => 'LBL_PRIMARY_ADDRESS_STREET',
//    'type' => 'varchar',
//    'len' => '150',
//    'group' => 'primary_address',
//    'comment' => 'Street address for primary address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'Street address for primary address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'primary_address_lane' =>
//  array (
//    'required' => false,
//    'name' => 'primary_address_lane',
//    'vname' => 'LBL_PRIMARY_ADDRESS_LANE',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '50',
//    'size' => '20',
//  ),
//  'primary_address_building' =>
//  array (
//    'required' => false,
//    'name' => 'primary_address_building',
//    'vname' => 'LBL_PRIMARY_ADDRESS_BUILDING',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '50',
//    'size' => '20',
//  ),
//  'primary_address_area' =>
//  array (
//    'required' => false,
//    'name' => 'primary_address_area',
//    'vname' => 'LBL_PRIMARY_ADDRESS_AREA',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '150',
//    'size' => '20',
//  ),
//  'alt_address_city' =>
//  array (
//    'name' => 'alt_address_city',
//    'vname' => 'LBL_ALT_ADDRESS_CITY',
//    'type' => 'varchar',
//    'len' => '100',
//    'group' => 'alt_address',
//    'comment' => 'City for alternate address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'City for alternate address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'alt_address_country' =>
//  array (
//    'name' => 'alt_address_country',
//    'vname' => 'LBL_ALT_ADDRESS_COUNTRY',
//    'type' => 'varchar',
//    'group' => 'alt_address',
//    'comment' => 'Country for alternate address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'Country for alternate address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'len' => '255',
//    'size' => '20',
//  ),
//  'alt_address_postalcode' =>
//  array (
//    'name' => 'alt_address_postalcode',
//    'vname' => 'LBL_ALT_ADDRESS_POSTALCODE',
//    'type' => 'varchar',
//    'len' => '20',
//    'group' => 'alt_address',
//    'comment' => 'Postal code for alternate address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'Postal code for alternate address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'alt_address_state' =>
//  array (
//    'name' => 'alt_address_state',
//    'vname' => 'LBL_ALT_ADDRESS_STATE',
//    'type' => 'varchar',
//    'len' => '100',
//    'group' => 'alt_address',
//    'comment' => 'State for alternate address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'State for alternate address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'alt_address_street' =>
//  array (
//    'name' => 'alt_address_street',
//    'vname' => 'LBL_ALT_ADDRESS_STREET',
//    'type' => 'varchar',
//    'len' => '150',
//    'group' => 'alt_address',
//    'comment' => 'Street address for alternate address',
//    'merge_filter' => 'disabled',
//    'required' => false,
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => 'Street address for alternate address',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'size' => '20',
//  ),
//  'alt_address_lane' =>
//  array (
//    'required' => false,
//    'name' => 'alt_address_lane',
//    'vname' => 'LBL_ALT_ADDRESS_LANE',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '50',
//    'size' => '20',
//  ),
//  'alt_address_building' =>
//  array (
//    'required' => false,
//    'name' => 'alt_address_building',
//    'vname' => 'LBL_ALT_ADDRESS_BUILDING',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '50',
//    'size' => '20',
//  ),
//  'alt_address_area' =>
//  array (
//    'required' => false,
//    'name' => 'alt_address_area',
//    'vname' => 'LBL_ALT_ADDRESS_AREA',
//    'type' => 'varchar',
//    'massupdate' => 0,
//    'no_default' => false,
//    'comments' => '',
//    'help' => '',
//    'importable' => 'true',
//    'duplicate_merge' => 'disabled',
//    'duplicate_merge_dom_value' => '0',
//    'audited' => false,
//    'inline_edit' => true,
//    'reportable' => true,
//    'unified_search' => false,
//    'merge_filter' => 'disabled',
//    'len' => '150',
//    'size' => '20',
//  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('PPT_Contacts', 'PPT_Contact', array('basic','assignable','security_groups'));