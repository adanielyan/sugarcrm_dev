<?php
// created: 2013-04-08 09:40:27
$dictionary["bank_bank_information_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bank_bank_information_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'bank_Bank_Information',
      'rhs_table' => 'bank_bank_information',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bank_bank_information_accounts_c',
      'join_key_lhs' => 'bank_bank_information_accountsaccounts_ida',
      'join_key_rhs' => 'bank_bank_information_accountsbank_bank_information_idb',
    ),
  ),
  'table' => 'bank_bank_information_accounts_c',
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
      'name' => 'bank_bank_information_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bank_bank_information_accountsbank_bank_information_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bank_bank_information_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bank_bank_information_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bank_bank_information_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bank_bank_information_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bank_bank_information_accountsbank_bank_information_idb',
      ),
    ),
  ),
);