<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-08-19 12:58:30
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_accounts"] = array (
  'name' => 'schoo_scholarships_accounts',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);


// created: 2013-08-19 13:39:19
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_activities_1_calls"] = array (
  'name' => 'schoo_scholarships_activities_1_calls',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_activities_1_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_ACTIVITIES_1_CALLS_FROM_CALLS_TITLE',
);


// created: 2013-08-19 12:58:30
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_a0423_agreements"] = array (
  'name' => 'schoo_scholarships_a0423_agreements',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_a0423_agreements',
  'source' => 'non-db',
  'module' => 'a0423_Agreements',
  'bean_name' => 'a0423_Agreements',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_A0423_AGREEMENTS_FROM_A0423_AGREEMENTS_TITLE',
  'id_name' => 'schoo_scholarships_a0423_agreementsa0423_agreements_idb',
);
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_a0423_agreements_name"] = array (
  'name' => 'schoo_scholarships_a0423_agreements_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_A0423_AGREEMENTS_FROM_A0423_AGREEMENTS_TITLE',
  'save' => true,
  'id_name' => 'schoo_scholarships_a0423_agreementsa0423_agreements_idb',
  'link' => 'schoo_scholarships_a0423_agreements',
  'table' => 'a0423_agreements',
  'module' => 'a0423_Agreements',
  'rname' => 'name',
);
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_a0423_agreementsa0423_agreements_idb"] = array (
  'name' => 'schoo_scholarships_a0423_agreementsa0423_agreements_idb',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_a0423_agreements',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_A0423_AGREEMENTS_FROM_A0423_AGREEMENTS_TITLE',
);


// created: 2013-08-19 13:39:20
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_activities_1_tasks"] = array (
  'name' => 'schoo_scholarships_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_ACTIVITIES_1_TASKS_FROM_TASKS_TITLE',
);


// created: 2013-08-19 13:39:19
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_activities_1_meetings"] = array (
  'name' => 'schoo_scholarships_activities_1_meetings',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_activities_1_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_ACTIVITIES_1_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2013-08-19 13:39:20
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_activities_1_emails"] = array (
  'name' => 'schoo_scholarships_activities_1_emails',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_activities_1_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_ACTIVITIES_1_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2013-08-19 13:39:20
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_activities_1_notes"] = array (
  'name' => 'schoo_scholarships_activities_1_notes',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_activities_1_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_ACTIVITIES_1_NOTES_FROM_NOTES_TITLE',
);


// created: 2013-08-19 12:58:30
$dictionary["schoo_Scholarships"]["fields"]["schoo_scholarships_contacts"] = array (
  'name' => 'schoo_scholarships_contacts',
  'type' => 'link',
  'relationship' => 'schoo_scholarships_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_SCHOO_SCHOLARSHIPS_CONTACTS_FROM_CONTACTS_TITLE',
);

?>