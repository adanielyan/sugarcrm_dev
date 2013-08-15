<?php
// created: 2013-04-11 14:00:10
$dictionary["b0411_bankinfo_b0411_bankinfo_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'b0411_bankinfo_b0411_bankinfo_1' => 
    array (
      'lhs_module' => 'b0411_Bankinfo',
      'lhs_table' => 'b0411_bankinfo',
      'lhs_key' => 'id',
      'rhs_module' => 'b0411_Bankinfo',
      'rhs_table' => 'b0411_bankinfo',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'b0411_bankinfo_b0411_bankinfo_1_c',
      'join_key_lhs' => 'b0411_bankinfo_b0411_bankinfo_1b0411_bankinfo_ida',
      'join_key_rhs' => 'b0411_bankinfo_b0411_bankinfo_1b0411_bankinfo_idb',
    ),
  ),
  'table' => 'b0411_bankinfo_b0411_bankinfo_1_c',
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
      'name' => 'b0411_bankinfo_b0411_bankinfo_1b0411_bankinfo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'b0411_bankinfo_b0411_bankinfo_1b0411_bankinfo_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'b0411_bankinfo_b0411_bankinfo_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'b0411_bankinfo_b0411_bankinfo_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b0411_bankinfo_b0411_bankinfo_1b0411_bankinfo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'b0411_bankinfo_b0411_bankinfo_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b0411_bankinfo_b0411_bankinfo_1b0411_bankinfo_idb',
      ),
    ),
  ),
);