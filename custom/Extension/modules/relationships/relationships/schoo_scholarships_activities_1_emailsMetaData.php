<?php
// created: 2013-08-19 13:39:20
$dictionary["schoo_scholarships_activities_1_emails"] = array (
  'relationships' => 
  array (
    'schoo_scholarships_activities_1_emails' => 
    array (
      'lhs_module' => 'schoo_Scholarships',
      'lhs_table' => 'schoo_scholarships',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'schoo_Scholarships',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);