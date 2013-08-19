<?php
// created: 2013-08-19 12:58:30
$dictionary["schoo_scholarships_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'schoo_scholarships_contacts' => 
    array (
      'lhs_module' => 'schoo_Scholarships',
      'lhs_table' => 'schoo_scholarships',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'schoo_scholarships_contacts_c',
      'join_key_lhs' => 'schoo_scholarships_contactsschoo_scholarships_ida',
      'join_key_rhs' => 'schoo_scholarships_contactscontacts_idb',
    ),
  ),
  'table' => 'schoo_scholarships_contacts_c',
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
      'name' => 'schoo_scholarships_contactsschoo_scholarships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'schoo_scholarships_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'schoo_scholarships_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'schoo_scholarships_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'schoo_scholarships_contactsschoo_scholarships_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'schoo_scholarships_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'schoo_scholarships_contactscontacts_idb',
      ),
    ),
  ),
);