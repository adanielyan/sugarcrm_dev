<?php
// created: 2013-04-11 14:09:23
$dictionary["b0411_Bankinfo"]["fields"]["accounts_b0411_bankinfo_1"] = array (
  'name' => 'accounts_b0411_bankinfo_1',
  'type' => 'link',
  'relationship' => 'accounts_b0411_bankinfo_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_B0411_BANKINFO_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_b0411_bankinfo_1accounts_ida',
);
$dictionary["b0411_Bankinfo"]["fields"]["accounts_b0411_bankinfo_1_name"] = array (
  'name' => 'accounts_b0411_bankinfo_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_B0411_BANKINFO_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_b0411_bankinfo_1accounts_ida',
  'link' => 'accounts_b0411_bankinfo_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["b0411_Bankinfo"]["fields"]["accounts_b0411_bankinfo_1accounts_ida"] = array (
  'name' => 'accounts_b0411_bankinfo_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_b0411_bankinfo_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_B0411_BANKINFO_1_FROM_B0411_BANKINFO_TITLE',
);
