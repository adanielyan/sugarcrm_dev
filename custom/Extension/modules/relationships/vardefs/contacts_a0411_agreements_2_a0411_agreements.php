<?php
// created: 2013-04-11 16:18:47
$dictionary["a0411_agreements"]["fields"]["contacts_a0411_agreements_2"] = array (
  'name' => 'contacts_a0411_agreements_2',
  'type' => 'link',
  'relationship' => 'contacts_a0411_agreements_2',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_A0411_AGREEMENTS_2_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_a0411_agreements_2contacts_ida',
);
$dictionary["a0411_agreements"]["fields"]["contacts_a0411_agreements_2_name"] = array (
  'name' => 'contacts_a0411_agreements_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_A0411_AGREEMENTS_2_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_a0411_agreements_2contacts_ida',
  'link' => 'contacts_a0411_agreements_2',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["a0411_agreements"]["fields"]["contacts_a0411_agreements_2contacts_ida"] = array (
  'name' => 'contacts_a0411_agreements_2contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_a0411_agreements_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_A0411_AGREEMENTS_2_FROM_A0411_AGREEMENTS_TITLE',
);
