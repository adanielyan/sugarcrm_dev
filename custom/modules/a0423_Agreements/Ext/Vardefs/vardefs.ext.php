<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2013-04-26 14:32:19
$dictionary["a0423_Agreements"]["fields"]["a0423_agreements_opportunities_1"] = array (
  'name' => 'a0423_agreements_opportunities_1',
  'type' => 'link',
  'relationship' => 'a0423_agreements_opportunities_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A0423_AGREEMENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


// created: 2013-05-20 20:09:51
$dictionary["a0423_Agreements"]["fields"]["a0423_agreements_activities_1_emails"] = array (
  'name' => 'a0423_agreements_activities_1_emails',
  'type' => 'link',
  'relationship' => 'a0423_agreements_activities_1_emails',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACTIVITIES_1_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2013-08-19 12:58:30
$dictionary["a0423_Agreements"]["fields"]["schoo_scholarships_a0423_agreements"] = array (
  'name' => 'schoo_scholarships_a0423_agreements',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_a0423_agreements',
  'source' => 'non-db',
  'module' => 'schoo_Scholarships',
  'bean_name' => false,
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_A0423_AGREEMENTS_FROM_SCHOO_SCHOLARSHIPS_TITLE',
  'id_name' => 'schoo_scholarships_a0423_agreementsschoo_scholarships_ida',
);
$dictionary["a0423_Agreements"]["fields"]["schoo_scholarships_a0423_agreements_name"] = array (
  'name' => 'schoo_scholarships_a0423_agreements_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_A0423_AGREEMENTS_FROM_SCHOO_SCHOLARSHIPS_TITLE',
  'save' => true,
  'id_name' => 'schoo_scholarships_a0423_agreementsschoo_scholarships_ida',
  'link' => 'schoo_scholarships_a0423_agreements',
  'table' => 'schoo_scholarships',
  'module' => 'schoo_Scholarships',
  'rname' => 'name',
);
$dictionary["a0423_Agreements"]["fields"]["schoo_scholarships_a0423_agreementsschoo_scholarships_ida"] = array (
  'name' => 'schoo_scholarships_a0423_agreementsschoo_scholarships_ida',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_a0423_agreements',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_A0423_AGREEMENTS_FROM_SCHOO_SCHOLARSHIPS_TITLE',
);


// created: 2013-08-13 15:50:47
$dictionary["a0423_Agreements"]["fields"]["a0423_agreements_contacts_1"] = array (
  'name' => 'a0423_agreements_contacts_1',
  'type' => 'link',
  'relationship' => 'a0423_agreements_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_A0423_AGREEMENTS_CONTACTS_1_FROM_CONTACTS_TITLE',
);


// created: 2013-05-20 20:09:51
$dictionary["a0423_Agreements"]["fields"]["a0423_agreements_activities_1_meetings"] = array (
  'name' => 'a0423_agreements_activities_1_meetings',
  'type' => 'link',
  'relationship' => 'a0423_agreements_activities_1_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACTIVITIES_1_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2013-05-20 20:09:51
$dictionary["a0423_Agreements"]["fields"]["a0423_agreements_activities_1_calls"] = array (
  'name' => 'a0423_agreements_activities_1_calls',
  'type' => 'link',
  'relationship' => 'a0423_agreements_activities_1_calls',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACTIVITIES_1_CALLS_FROM_CALLS_TITLE',
);


// created: 2013-05-20 20:09:51
$dictionary["a0423_Agreements"]["fields"]["a0423_agreements_activities_1_tasks"] = array (
  'name' => 'a0423_agreements_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'a0423_agreements_activities_1_tasks',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACTIVITIES_1_TASKS_FROM_TASKS_TITLE',
);


// created: 2013-05-20 20:09:51
$dictionary["a0423_Agreements"]["fields"]["a0423_agreements_activities_1_notes"] = array (
  'name' => 'a0423_agreements_activities_1_notes',
  'type' => 'link',
  'relationship' => 'a0423_agreements_activities_1_notes',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACTIVITIES_1_NOTES_FROM_NOTES_TITLE',
);


// created: 2013-04-30 14:31:09
$dictionary["a0423_Agreements"]["fields"]["accounts_a0423_agreements_1"] = array (
  'name' => 'accounts_a0423_agreements_1',
  'type' => 'link',
  'relationship' => 'accounts_a0423_agreements_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_A0423_AGREEMENTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_a0423_agreements_1accounts_ida',
);
$dictionary["a0423_Agreements"]["fields"]["accounts_a0423_agreements_1_name"] = array (
  'name' => 'accounts_a0423_agreements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_A0423_AGREEMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_a0423_agreements_1accounts_ida',
  'link' => 'accounts_a0423_agreements_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["a0423_Agreements"]["fields"]["accounts_a0423_agreements_1accounts_ida"] = array (
  'name' => 'accounts_a0423_agreements_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_a0423_agreements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_A0423_AGREEMENTS_1_FROM_A0423_AGREEMENTS_TITLE',
);

?>