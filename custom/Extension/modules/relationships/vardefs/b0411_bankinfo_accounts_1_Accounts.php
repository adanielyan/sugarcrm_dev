<?php
// created: 2013-04-11 14:02:04
$dictionary["Account"]["fields"]["b0411_bankinfo_accounts_1"] = array (
  'name' => 'b0411_bankinfo_accounts_1',
  'type' => 'link',
  'relationship' => 'b0411_bankinfo_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_1_FROM_B0411_BANKINFO_TITLE',
  'id_name' => 'b0411_bankinfo_accounts_1b0411_bankinfo_ida',
);
$dictionary["Account"]["fields"]["b0411_bankinfo_accounts_1_name"] = array (
  'name' => 'b0411_bankinfo_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_1_FROM_B0411_BANKINFO_TITLE',
  'save' => true,
  'id_name' => 'b0411_bankinfo_accounts_1b0411_bankinfo_ida',
  'link' => 'b0411_bankinfo_accounts_1',
  'table' => 'b0411_bankinfo',
  'module' => 'b0411_Bankinfo',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["b0411_bankinfo_accounts_1b0411_bankinfo_ida"] = array (
  'name' => 'b0411_bankinfo_accounts_1b0411_bankinfo_ida',
  'type' => 'link',
  'relationship' => 'b0411_bankinfo_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_B0411_BANKINFO_ACCOUNTS_1_FROM_B0411_BANKINFO_TITLE',
);
