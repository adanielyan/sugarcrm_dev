<?php
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
