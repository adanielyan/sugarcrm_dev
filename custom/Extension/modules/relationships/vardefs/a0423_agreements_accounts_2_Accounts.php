<?php
// created: 2013-04-26 17:28:05
$dictionary["Account"]["fields"]["a0423_agreements_accounts_2"] = array (
  'name' => 'a0423_agreements_accounts_2',
  'type' => 'link',
  'relationship' => 'a0423_agreements_accounts_2',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACCOUNTS_2_FROM_A0423_AGREEMENTS_TITLE',
  'id_name' => 'a0423_agreements_accounts_2a0423_agreements_ida',
);
$dictionary["Account"]["fields"]["a0423_agreements_accounts_2_name"] = array (
  'name' => 'a0423_agreements_accounts_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACCOUNTS_2_FROM_A0423_AGREEMENTS_TITLE',
  'save' => true,
  'id_name' => 'a0423_agreements_accounts_2a0423_agreements_ida',
  'link' => 'a0423_agreements_accounts_2',
  'table' => 'a0423_agreements',
  'module' => 'a0423_Agreements',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["a0423_agreements_accounts_2a0423_agreements_ida"] = array (
  'name' => 'a0423_agreements_accounts_2a0423_agreements_ida',
  'type' => 'link',
  'relationship' => 'a0423_agreements_accounts_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A0423_AGREEMENTS_ACCOUNTS_2_FROM_ACCOUNTS_TITLE',
);
