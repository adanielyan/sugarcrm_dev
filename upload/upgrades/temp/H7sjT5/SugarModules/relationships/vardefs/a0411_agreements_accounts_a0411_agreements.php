<?php
// created: 2013-04-11 10:28:00
$dictionary["a0411_agreements"]["fields"]["a0411_agreements_accounts"] = array (
  'name' => 'a0411_agreements_accounts',
  'type' => 'link',
  'relationship' => 'a0411_agreements_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_A0411_AGREEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'a0411_agreements_accountsaccounts_ida',
);
$dictionary["a0411_agreements"]["fields"]["a0411_agreements_accounts_name"] = array (
  'name' => 'a0411_agreements_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A0411_AGREEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'a0411_agreements_accountsaccounts_ida',
  'link' => 'a0411_agreements_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["a0411_agreements"]["fields"]["a0411_agreements_accountsaccounts_ida"] = array (
  'name' => 'a0411_agreements_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'a0411_agreements_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A0411_AGREEMENTS_ACCOUNTS_FROM_A0411_AGREEMENTS_TITLE',
);
