<?php
// created: 2013-08-19 12:58:30
$dictionary["schoo_scholarships_accounts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'schoo_scholarships_accounts' => 
    array (
      'lhs_module' => 'schoo_Scholarships',
      'lhs_table' => 'schoo_scholarships',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'schoo_scholarships_accounts_c',
      'join_key_lhs' => 'schoo_scholarships_accountsschoo_scholarships_ida',
      'join_key_rhs' => 'schoo_scholarships_accountsaccounts_idb',
    ),
  ),
  'table' => 'schoo_scholarships_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'schoo_scholarships_accountsschoo_scholarships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'schoo_scholarships_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'schoo_scholarships_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'schoo_scholarships_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'schoo_scholarships_accountsschoo_scholarships_ida',
        1 => 'schoo_scholarships_accountsaccounts_idb',
      ),
    ),
  ),
);