<?php
// created: 2013-04-10 12:14:14
$dictionary["bank_agreements_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bank_agreements_accounts' => 
    array (
      'lhs_module' => 'bank_Agreements',
      'lhs_table' => 'bank_agreements',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bank_agreements_accounts_c',
      'join_key_lhs' => 'bank_agreements_accountsbank_agreements_ida',
      'join_key_rhs' => 'bank_agreements_accountsaccounts_idb',
    ),
  ),
  'table' => 'bank_agreements_accounts_c',
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
      'name' => 'bank_agreements_accountsbank_agreements_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bank_agreements_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bank_agreements_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bank_agreements_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bank_agreements_accountsbank_agreements_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bank_agreements_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bank_agreements_accountsaccounts_idb',
      ),
    ),
  ),
);