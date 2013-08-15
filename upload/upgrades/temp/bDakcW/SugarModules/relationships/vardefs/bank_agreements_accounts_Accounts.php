<?php
// created: 2013-04-10 13:29:46
$dictionary["Account"]["fields"]["bank_agreements_accounts"] = array (
  'name' => 'bank_agreements_accounts',
  'type' => 'link',
  'relationship' => 'bank_agreements_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_FROM_BANK_AGREEMENTS_TITLE',
  'id_name' => 'bank_agreements_accountsbank_agreements_ida',
);
$dictionary["Account"]["fields"]["bank_agreements_accounts_name"] = array (
  'name' => 'bank_agreements_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_FROM_BANK_AGREEMENTS_TITLE',
  'save' => true,
  'id_name' => 'bank_agreements_accountsbank_agreements_ida',
  'link' => 'bank_agreements_accounts',
  'table' => 'bank_agreements',
  'module' => 'bank_Agreements',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["bank_agreements_accountsbank_agreements_ida"] = array (
  'name' => 'bank_agreements_accountsbank_agreements_ida',
  'type' => 'link',
  'relationship' => 'bank_agreements_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
