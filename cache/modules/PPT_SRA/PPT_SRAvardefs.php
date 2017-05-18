<?php 
 $GLOBALS["dictionary"]["PPT_SRA"]=array (
  'table' => 'ppt_sra',
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
      'relationship' => 'ppt_sra_created_by',
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
      'relationship' => 'ppt_sra_modified_user',
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
      'relationship' => 'ppt_sra_assigned_user',
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
      'relationship' => 'securitygroups_ppt_sra',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'number' => 
    array (
      'name' => 'number',
      'vname' => 'LBL_NUMBER',
      'type' => 'int',
      'len' => 11,
      'default' => 0,
      'required' => false,
      'massupdate' => 0,
      'reportable' => true,
    ),
    'origin' => 
    array (
      'name' => 'origin',
      'vname' => 'LBL_ORIGIN',
      'type' => 'enum',
      'options' => 'ppt-airports-dom',
      'len' => 50,
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
    ),
    'dest' => 
    array (
      'name' => 'dest',
      'vname' => 'LBL_DEST',
      'type' => 'enum',
      'options' => 'ppt-airports-dom',
      'len' => 50,
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
    ),
    'service' => 
    array (
      'name' => 'service',
      'vname' => 'LBL_SERVICE',
      'type' => 'enum',
      'options' => 'ppt-services-dom',
      'len' => 255,
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
    ),
    'product' => 
    array (
      'name' => 'product',
      'vname' => 'LBL_PRODUCT',
      'type' => 'enum',
      'options' => 'ppt-products-dom',
      'len' => 255,
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
    ),
    'capri' => 
    array (
      'name' => 'capri',
      'vname' => 'LBL_CAPRI',
      'type' => 'bool',
      'default' => 1,
      'massupdate' => 0,
      'reportable' => true,
    ),
    'issue' => 
    array (
      'name' => 'issue',
      'vname' => 'LBL_ISSUE',
      'type' => 'date',
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
      'display_default' => 'now',
    ),
    'valid_from' => 
    array (
      'name' => 'valid_from',
      'vname' => 'LBL_VALID_FROM',
      'type' => 'date',
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
      'display_default' => 'now',
    ),
    'valid_until' => 
    array (
      'name' => 'valid_until',
      'vname' => 'LBL_VALID_UNTIL',
      'type' => 'date',
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
      'display_default' => '+ 5 month',
    ),
    'currency' => 
    array (
      'name' => 'currency',
      'vname' => 'LBL_CURRENCY',
      'type' => 'varchar',
      'len' => 50,
      'size' => 20,
      'massupdate' => 0,
      'reportable' => true,
    ),
    'min_field' => 
    array (
      'name' => 'min_field',
      'vname' => 'LBL_MIN',
      'type' => 'int',
      'dbType' => 'int',
      'len' => '4',
      'massupdate' => 0,
      'duplicate_merge' => 'disabled',
      'audited' => false,
      'inline_edit' => true,
    ),
    'n_field' => 
    array (
      'name' => 'n_field',
      'vname' => 'LBL_N',
      'type' => 'float',
      'dbType' => 'float',
      'len' => '4',
      'precision' => '2',
      'massupdate' => 0,
      'duplicate_merge' => 'disabled',
      'audited' => false,
      'inline_edit' => true,
    ),
    'rates' => 
    array (
      'name' => 'rates',
      'vname' => 'LBL_RATES',
      'type' => 'text',
      'required' => true,
      'massupdate' => 0,
      'reportable' => true,
      'rows' => 10,
      'cols' => 100,
    ),
    'rates_count' => 
    array (
      'name' => 'rates_count',
      'vname' => 'LBL_RATES',
      'type' => 'varchar',
      'required' => false,
      'massupdate' => 0,
      'reportable' => false,
      'inline_edit' => false,
      'default' => '0 levels',
      'len' => '50',
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
    'shipper_id' => 
    array (
      'name' => 'shipper_id',
      'rname' => 'id',
      'id_name' => 'shipper_id',
      'table' => 'ppt_accounts',
      'module' => 'PPT_Accounts',
      'isnull' => 'false',
      'vname' => 'LBL_SHIPPER_ID',
      'type' => 'id',
      'dbType' => 'id',
      'reportable' => true,
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'shipper_name' => 
    array (
      'name' => 'shipper_name',
      'vname' => 'LBL_SHIPPER',
      'type' => 'relate',
      'len' => 255,
      'required' => true,
      'massupdate' => 0,
      'rname' => 'name',
      'source' => 'non-db',
      'id_name' => 'shipper_id',
      'duplicate_merge' => 'disabled',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'table' => 'ppt_accounts',
      'module' => 'PPT_Accounts',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'rname' => 'id',
      'id_name' => 'contact_id',
      'table' => 'ppt_contacts',
      'module' => 'PPT_Contacts',
      'isnull' => 'false',
      'vname' => 'LBL_CONTACT_ID',
      'type' => 'id',
      'dbType' => 'id',
      'reportable' => true,
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'vname' => 'LBL_CONTACT',
      'type' => 'relate',
      'len' => 255,
      'massupdate' => 0,
      'rname' => 'name',
      'source' => 'non-db',
      'id_name' => 'contact_id',
      'duplicate_merge' => 'disabled',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'table' => 'ppt_contacts',
      'module' => 'PPT_Contacts',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'ppt_srapk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_name',
      'type' => 'unique',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'account_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_shippers',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'shipper_id',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_contacts',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contact_id',
      ),
    ),
    4 => 
    array (
      'name' => 'idx_origin',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'origin',
      ),
    ),
    5 => 
    array (
      'name' => 'idx_destination',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dest',
      ),
    ),
  ),
  'relationships' => 
  array (
    'ppt_sra_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_SRA',
      'rhs_table' => 'ppt_sra',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ppt_sra_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_SRA',
      'rhs_table' => 'ppt_sra',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ppt_sra_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_SRA',
      'rhs_table' => 'ppt_sra',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_ppt_sra' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_SRA',
      'rhs_table' => 'ppt_sra',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'PPT_SRA',
    ),
    'sra_accounts' => 
    array (
      'lhs_module' => 'PPT_Accounts',
      'lhs_table' => 'ppt_accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_SRA',
      'rhs_table' => 'ppt_sra',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
    'sra_shippers' => 
    array (
      'lhs_module' => 'PPT_Accounts',
      'lhs_table' => 'ppt_accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'PPT_SRA',
      'rhs_table' => 'ppt_sra',
      'rhs_key' => 'shipper_id',
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