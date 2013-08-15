<?php
// created: 2013-04-11 16:26:11
$dictionary["a0411_agreements"]["fields"]["accounts_a0411_agreements_1"] = array (
  'name' => 'accounts_a0411_agreements_1',
  'type' => 'link',
  'relationship' => 'accounts_a0411_agreements_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_A0411_AGREEMENTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_a0411_agreements_1accounts_ida',
);
$dictionary["a0411_agreements"]["fields"]["accounts_a0411_agreements_1_name"] = array (
  'name' => 'accounts_a0411_agreements_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_A0411_AGREEMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_a0411_agreements_1accounts_ida',
  'link' => 'accounts_a0411_agreements_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["a0411_agreements"]["fields"]["accounts_a0411_agreements_1accounts_ida"] = array (
  'name' => 'accounts_a0411_agreements_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_a0411_agreements_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_A0411_AGREEMENTS_1_FROM_A0411_AGREEMENTS_TITLE',
);
