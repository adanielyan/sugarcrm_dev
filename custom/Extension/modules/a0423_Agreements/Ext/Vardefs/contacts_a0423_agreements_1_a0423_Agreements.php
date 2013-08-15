<?php
// created: 2013-08-13 15:35:57
$dictionary["a0423_Agreements"]["fields"]["contacts_a0423_agreements_1"] = array (
  'name' => 'contacts_a0423_agreements_1',
  'type' => 'link',
  'relationship' => 'contacts_a0423_agreements_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_A0423_AGREEMENTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_a0423_agreements_1contacts_ida',
);
$dictionary["a0423_Agreements"]["fields"]["contacts_a0423_agreements_1_name"] = array (
  'name' => 'contacts_a0423_agreements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_A0423_AGREEMENTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_a0423_agreements_1contacts_ida',
  'link' => 'contacts_a0423_agreements_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["a0423_Agreements"]["fields"]["contacts_a0423_agreements_1contacts_ida"] = array (
  'name' => 'contacts_a0423_agreements_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_a0423_agreements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_A0423_AGREEMENTS_1_FROM_A0423_AGREEMENTS_TITLE',
);
