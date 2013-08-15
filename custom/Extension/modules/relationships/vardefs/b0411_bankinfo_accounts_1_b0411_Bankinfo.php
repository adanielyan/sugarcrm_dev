<?php
// created: 2013-04-11 14:02:04
$dictionary["b0411_Bankinfo"]["fields"]["b0411_bankinfo_accounts_1"] = array (
  'name' => 'b0411_bankinfo_accounts_1',
  'type' => 'link',
  'relationship' => 'b0411_bankinfo_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'b0411_bankinfo_accounts_1accounts_idb',
);
$dictionary["b0411_Bankinfo"]["fields"]["b0411_bankinfo_accounts_1_name"] = array (
  'name' => 'b0411_bankinfo_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'b0411_bankinfo_accounts_1accounts_idb',
  'link' => 'b0411_bankinfo_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["b0411_Bankinfo"]["fields"]["b0411_bankinfo_accounts_1accounts_idb"] = array (
  'name' => 'b0411_bankinfo_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'b0411_bankinfo_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
