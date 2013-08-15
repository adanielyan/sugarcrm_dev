<?php
// created: 2013-05-20 20:09:51
$dictionary["a0423_agreements_activities_1_notes"] = array (
  'relationships' => 
  array (
    'a0423_agreements_activities_1_notes' => 
    array (
      'lhs_module' => 'a0423_Agreements',
      'lhs_table' => 'a0423_agreements',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'a0423_Agreements',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);