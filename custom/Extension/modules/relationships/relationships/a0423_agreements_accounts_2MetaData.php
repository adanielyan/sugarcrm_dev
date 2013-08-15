<?php
// created: 2013-04-26 17:28:05
$dictionary["a0423_agreements_accounts_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'a0423_agreements_accounts_2' => 
    array (
      'lhs_module' => 'a0423_Agreements',
      'lhs_table' => 'a0423_agreements',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a0423_agreements_accounts_2_c',
      'join_key_lhs' => 'a0423_agreements_accounts_2a0423_agreements_ida',
      'join_key_rhs' => 'a0423_agreements_accounts_2accounts_idb',
    ),
  ),
  'table' => 'a0423_agreements_accounts_2_c',
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
      'name' => 'a0423_agreements_accounts_2a0423_agreements_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'a0423_agreements_accounts_2accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a0423_agreements_accounts_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a0423_agreements_accounts_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a0423_agreements_accounts_2a0423_agreements_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a0423_agreements_accounts_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a0423_agreements_accounts_2accounts_idb',
      ),
    ),
  ),
);