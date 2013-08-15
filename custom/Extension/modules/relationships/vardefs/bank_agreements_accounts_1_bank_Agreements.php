<?php
// created: 2013-04-10 14:51:12
$dictionary["bank_Agreements"]["fields"]["bank_agreements_accounts_1"] = array (
  'name' => 'bank_agreements_accounts_1',
  'type' => 'link',
  'relationship' => 'bank_agreements_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'bank_agreements_accounts_1accounts_idb',
);
$dictionary["bank_Agreements"]["fields"]["bank_agreements_accounts_1_name"] = array (
  'name' => 'bank_agreements_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'bank_agreements_accounts_1accounts_idb',
  'link' => 'bank_agreements_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["bank_Agreements"]["fields"]["bank_agreements_accounts_1accounts_idb"] = array (
  'name' => 'bank_agreements_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'bank_agreements_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
