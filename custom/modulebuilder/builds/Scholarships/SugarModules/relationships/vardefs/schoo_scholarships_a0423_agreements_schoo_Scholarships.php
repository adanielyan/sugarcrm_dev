<?php
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
