<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-04-26 14:32:19
$dictionary["Opportunity"]["fields"]["a0423_agreements_opportunities_1"] = array (
  'name' => 'a0423_agreements_opportunities_1',
  'type' => 'link',
  'relationship' => 'a0423_agreements_opportunities_1',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_OPPORTUNITIES_1_FROM_A0423_AGREEMENTS_TITLE',
  'id_name' => 'a0423_agreements_opportunities_1a0423_agreements_ida',
);
$dictionary["Opportunity"]["fields"]["a0423_agreements_opportunities_1_name"] = array (
  'name' => 'a0423_agreements_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_OPPORTUNITIES_1_FROM_A0423_AGREEMENTS_TITLE',
  'save' => true,
  'id_name' => 'a0423_agreements_opportunities_1a0423_agreements_ida',
  'link' => 'a0423_agreements_opportunities_1',
  'table' => 'a0423_agreements',
  'module' => 'a0423_Agreements',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["a0423_agreements_opportunities_1a0423_agreements_ida"] = array (
  'name' => 'a0423_agreements_opportunities_1a0423_agreements_ida',
  'type' => 'link',
  'relationship' => 'a0423_agreements_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A0423_AGREEMENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);



$dictionary['Opportunity']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_opportunities',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);





?>