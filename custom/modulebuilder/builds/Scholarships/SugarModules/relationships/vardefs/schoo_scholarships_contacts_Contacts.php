<?php
// created: 2013-08-19 12:58:30
$dictionary["Contact"]["fields"]["schoo_scholarships_contacts"] = array (
  'name' => 'schoo_scholarships_contacts',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_contacts',
  'source' => 'non-db',
  'module' => 'schoo_Scholarships',
  'bean_name' => false,
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_CONTACTS_FROM_SCHOO_SCHOLARSHIPS_TITLE',
  'id_name' => 'schoo_scholarships_contactsschoo_scholarships_ida',
);
$dictionary["Contact"]["fields"]["schoo_scholarships_contacts_name"] = array (
  'name' => 'schoo_scholarships_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_CONTACTS_FROM_SCHOO_SCHOLARSHIPS_TITLE',
  'save' => true,
  'id_name' => 'schoo_scholarships_contactsschoo_scholarships_ida',
  'link' => 'schoo_scholarships_contacts',
  'table' => 'schoo_scholarships',
  'module' => 'schoo_Scholarships',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["schoo_scholarships_contactsschoo_scholarships_ida"] = array (
  'name' => 'schoo_scholarships_contactsschoo_scholarships_ida',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_CONTACTS_FROM_CONTACTS_TITLE',
);
