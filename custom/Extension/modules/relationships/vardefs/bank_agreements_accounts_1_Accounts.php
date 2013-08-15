<?php
// created: 2013-04-10 14:51:12
$dictionary["Account"]["fields"]["bank_agreements_accounts_1"] = array (
  'name' => 'bank_agreements_accounts_1',
  'type' => 'link',
  'relationship' => 'bank_agreements_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_1_FROM_BANK_AGREEMENTS_TITLE',
  'id_name' => 'bank_agreements_accounts_1bank_agreements_ida',
);
$dictionary["Account"]["fields"]["bank_agreements_accounts_1_name"] = array (
  'name' => 'bank_agreements_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_1_FROM_BANK_AGREEMENTS_TITLE',
  'save' => true,
  'id_name' => 'bank_agreements_accounts_1bank_agreements_ida',
  'link' => 'bank_agreements_accounts_1',
  'table' => 'bank_agreements',
  'module' => 'bank_Agreements',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["bank_agreements_accounts_1bank_agreements_ida"] = array (
  'name' => 'bank_agreements_accounts_1bank_agreements_ida',
  'type' => 'link',
  'relationship' => 'bank_agreements_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_1_FROM_BANK_AGREEMENTS_TITLE',
);
