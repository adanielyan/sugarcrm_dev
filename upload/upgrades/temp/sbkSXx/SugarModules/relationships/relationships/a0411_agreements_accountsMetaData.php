<?php
// created: 2013-04-11 10:28:00
$dictionary["a0411_agreements_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'a0411_agreements_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'a0411_agreements',
      'rhs_table' => 'a0411_agreements',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a0411_agreements_accounts_c',
      'join_key_lhs' => 'a0411_agreements_accountsaccounts_ida',
      'join_key_rhs' => 'a0411_agreements_accountsa0411_agreements_idb',
    ),
  ),
  'table' => 'a0411_agreements_accounts_c',
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
      'name' => 'a0411_agreements_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'a0411_agreements_accountsa0411_agreements_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a0411_agreements_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a0411_agreements_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a0411_agreements_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a0411_agreements_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a0411_agreements_accountsa0411_agreements_idb',
      ),
    ),
  ),
);