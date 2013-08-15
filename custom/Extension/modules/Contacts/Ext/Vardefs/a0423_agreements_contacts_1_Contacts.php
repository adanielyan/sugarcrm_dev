<?php
// created: 2013-08-13 15:50:47
$dictionary["Contact"]["fields"]["a0423_agreements_contacts_1"] = array (
  'name' => 'a0423_agreements_contacts_1',
  'type' => 'link',
  'relationship' => 'a0423_agreements_contacts_1',
  'source' => 'non-db',
  'module' => 'a0423_Agreements',
  'bean_name' => 'a0423_Agreements',
  'vname' => 'LBL_A0423_AGREEMENTS_CONTACTS_1_FROM_A0423_AGREEMENTS_TITLE',
  'id_name' => 'a0423_agreements_contacts_1a0423_agreements_ida',
);
$dictionary["Contact"]["fields"]["a0423_agreements_contacts_1_name"] = array (
  'name' => 'a0423_agreements_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_CONTACTS_1_FROM_A0423_AGREEMENTS_TITLE',
  'save' => true,
  'id_name' => 'a0423_agreements_contacts_1a0423_agreements_ida',
  'link' => 'a0423_agreements_contacts_1',
  'table' => 'a0423_agreements',
  'module' => 'a0423_Agreements',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["a0423_agreements_contacts_1a0423_agreements_ida"] = array (
  'name' => 'a0423_agreements_contacts_1a0423_agreements_ida',
  'type' => 'link',
  'relationship' => 'a0423_agreements_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A0423_AGREEMENTS_CONTACTS_1_FROM_CONTACTS_TITLE',
);
