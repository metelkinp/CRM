<?php 
 $GLOBALS["dictionary"]["PPT_Contact"]=array (
  'table' => 'ppt_contacts',
  'audited' => false,
  'inline_edit' => true,
  'duplicate_merge' => 'disabled',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'ppt_contacts_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'ppt_contacts_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'ppt_contacts_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_ppt_contacts',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'active_flag' => 
    array (
      'name' => 'active_flag',
      'vname' => 'LBL_ACTIVE_FLAG',
      'type' => 'bool',
      'importable' => true,
      'reportable' => true,
      'required' => false,
      'massupdate' => false,
      'default' => 1,
    ),
    'first_name' => 
    array (
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
    'last_name' => 
    array (
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
    'salutation' => 
    array (
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
    'position' => 
    array (
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
    'job_title' => 
    array (
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
    'department' => 
    array (
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
    'gender' => 
    array (
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
    'academic_title' => 
    array (
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
    'honorous_title' => 
    array (
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
    'nickname' => 
    array (
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
    'phone_main' => 
    array (
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
    'phone_mobile' => 
    array (
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
    'fax' => 
    array (
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
    'email' => 
    array (
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
    'pref_comm' => 
    array (
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
    'pref_lang' => 
    array (
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
    'birthday' => 
    array (
      'name' => 'birthday',
      'vname' => 'LBL_BIRTHDAY',
      'type' => 'date',
      'size' => '20',
      'importable' => true,
      'reportable' => true,
      'required' => false,
      'massupdate' => false,
    ),
    'eBook_login' => 
    array (
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
    'address_business_street' => 
    array (
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
    'address_business_lane' => 
    array (
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
    'address_business_po_box' => 
    array (
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
    'address_business_zip' => 
    array (
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
    'address_business_city' => 
    array (
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
    'address_business_state' => 
    array (
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
    'address_business_country' => 
    array (
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
    'address_personal_street' => 
    array (
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
    'address_personal_lane' => 
    array (
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
    'address_personal_po_box' => 
    array (
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
    'address_personal_zip' => 
    array (
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
    'address_personal_city' => 
    array (
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
    'address_personal_state' => 
    array (
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
    'address_personal_country' => 
    array (
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
    'account_id' => 
    array (
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
    'account_name' => 
    array (
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
    'ppt_accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_contacts',
      'link_type' => 'one',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
    ),
    'ppt_contracts' => 
    array (
      'name' => 'ppt_contracts',
      'type' => 'link',
      'relationship' => 'contact_contracts',
      'source' => 'non-db',
      'module' => 'PPT_Contracts',
      'bean_name' => 'PPT_Contract',
    ),
    'ppt_sra' => 
    array (
      'name' => 'ppt_sra',
      'type' => 'link',
      'relationship' => 'contact_sra',
      'source' => 'non-db',
      'module' => 'PPT_SRA',
      'bean_name' => 'PPT_SRA',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'ppt_contactspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_last_first_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'last_name',
        1 => 'first_name',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_account',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'account_id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'ppt_contacts_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_Contacts',
      'rhs_table' => 'ppt_contacts',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ppt_contacts_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_Contacts',
      'rhs_table' => 'ppt_contacts',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ppt_contacts_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_Contacts',
      'rhs_table' => 'ppt_contacts',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_ppt_contacts' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_Contacts',
      'rhs_table' => 'ppt_contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'PPT_Contacts',
    ),
    'contact_sra' => 
    array (
      'lhs_module' => 'PPT_Contacts',
      'lhs_table' => 'ppt_contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_SRA',
      'rhs_table' => 'ppt_sra',
      'rhs_key' => 'contact_id',
      'relationship_type' => 'one-to-many',
    ),
    'contact_contracts' => 
    array (
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
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);