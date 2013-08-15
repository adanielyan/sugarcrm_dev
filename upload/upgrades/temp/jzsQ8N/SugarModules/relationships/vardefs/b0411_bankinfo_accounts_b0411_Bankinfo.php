<?php
// created: 2013-04-11 09:18:28
$dictionary["b0411_Bankinfo"]["fields"]["b0411_bankinfo_accounts"] = array (
  'name' => 'b0411_bankinfo_accounts',
  'type' => 'link',
  'relationship' => 'b0411_bankinfo_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'b0411_bankinfo_accountsaccounts_ida',
);
$dictionary["b0411_Bankinfo"]["fields"]["b0411_bankinfo_accounts_name"] = array (
  'name' => 'b0411_bankinfo_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'b0411_bankinfo_accountsaccounts_ida',
  'link' => 'b0411_bankinfo_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["b0411_Bankinfo"]["fields"]["b0411_bankinfo_accountsaccounts_ida"] = array (
  'name' => 'b0411_bankinfo_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'b0411_bankinfo_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_FROM_B0411_BANKINFO_TITLE',
);
