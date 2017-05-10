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

require_once('include/SugarObjects/templates/basic/Basic.php');

class PPT_Account extends Basic
{
    public $new_schema = true;
    public $module_dir = 'PPT_Accounts';
    public $object_name = 'PPT_Account';
    public $table_name = 'ppt_accounts';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public $active_flag;
    public $importonly_flag;
    public $localhero_flag;
    public $cdb_num;
    public $sales_level_6;
    public $company_type;
    public $station;
    public $industry_type;
    public $acc_short_name;
    public $bkng_short_name;
    public $iata_num;
    public $cass_num;
    public $sap_num;
    public $phone;
    public $fax;
    public $email;
    public $website;
    public $address_type;
    public $address_street;
    public $address_lane;
    public $address_building;
    public $address_area;
    public $address_po_box;
    public $address_zip;
    public $address_city;
    public $address_state;
    public $address_country;
    public $lavlsv_num;
    public $account_role;

    //related
    public $ppt_contact_id;
    public $ppt_contract_id;
    public $ppt_sra_id;

    public $additional_column_fields = Array('assigned_user_name', 'assigned_user_id', 'ppt_contact_id',
        'ppt_contract_id', 'ppt_sra_id');

    public $relationship_fields = Array(
        'ppt_contact_id' => 'ppt_contacts',
        'ppt_contract_id' => 'ppt_contracts',
        'ppt_sra_id' => 'ppt_sra',
    );

    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    public function save($check_notify = false)
    {
        return parent::save($check_notify);
    }
	
}