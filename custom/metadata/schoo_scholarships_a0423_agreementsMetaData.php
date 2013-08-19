<?php
// created: 2013-08-19 12:58:30
$dictionary["schoo_scholarships_a0423_agreements"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'schoo_scholarships_a0423_agreements' => 
    array (
      'lhs_module' => 'schoo_Scholarships',
      'lhs_table' => 'schoo_scholarships',
      'lhs_key' => 'id',
      'rhs_module' => 'a0423_Agreements',
      'rhs_table' => 'a0423_agreements',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'schoo_scholarships_a0423_agreements_c',
      'join_key_lhs' => 'schoo_scholarships_a0423_agreementsschoo_scholarships_ida',
      'join_key_rhs' => 'schoo_scholarships_a0423_agreementsa0423_agreements_idb',
    ),
  ),
  'table' => 'schoo_scholarships_a0423_agreements_c',
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
      'name' => 'schoo_scholarships_a0423_agreementsschoo_scholarships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'schoo_scholarships_a0423_agreementsa0423_agreements_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'schoo_scholarships_a0423_agreementsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'schoo_scholarships_a0423_agreements_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'schoo_scholarships_a0423_agreementsschoo_scholarships_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'schoo_scholarships_a0423_agreements_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'schoo_scholarships_a0423_agreementsa0423_agreements_idb',
      ),
    ),
  ),
);