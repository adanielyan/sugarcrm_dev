<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Contact']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_contacts',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






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


// created: 2013-08-13 15:35:57
$dictionary["Contact"]["fields"]["contacts_a0423_agreements_1"] = array (
  'name' => 'contacts_a0423_agreements_1',
  'type' => 'link',
  'relationship' => 'contacts_a0423_agreements_1',
  'source' => 'non-db',
  'module' => 'a0423_Agreements',
  'bean_name' => 'a0423_Agreements',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_A0423_AGREEMENTS_1_FROM_A0423_AGREEMENTS_TITLE',
);

?>