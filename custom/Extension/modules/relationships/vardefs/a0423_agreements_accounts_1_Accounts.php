<?php
// created: 2013-04-26 17:32:40
$dictionary["Account"]["fields"]["a0423_agreements_accounts_1"] = array (
  'name' => 'a0423_agreements_accounts_1',
  'type' => 'link',
  'relationship' => 'a0423_agreements_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACCOUNTS_1_FROM_A0423_AGREEMENTS_TITLE',
  'id_name' => 'a0423_agreements_accounts_1a0423_agreements_ida',
);
$dictionary["Account"]["fields"]["a0423_agreements_accounts_1_name"] = array (
  'name' => 'a0423_agreements_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A0423_AGREEMENTS_ACCOUNTS_1_FROM_A0423_AGREEMENTS_TITLE',
  'save' => true,
  'id_name' => 'a0423_agreements_accounts_1a0423_agreements_ida',
  'link' => 'a0423_agreements_accounts_1',
  'table' => 'a0423_agreements',
  'module' => 'a0423_Agreements',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["a0423_agreements_accounts_1a0423_agreements_ida"] = array (
  'name' => 'a0423_agreements_accounts_1a0423_agreements_ida',
  'type' => 'link',
  'relationship' => 'a0423_agreements_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A0423_AGREEMENTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
