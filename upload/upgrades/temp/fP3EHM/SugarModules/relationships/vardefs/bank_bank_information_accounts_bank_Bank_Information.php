<?php
// created: 2013-04-10 12:14:14
$dictionary["bank_Bank_Information"]["fields"]["bank_bank_information_accounts"] = array (
  'name' => 'bank_bank_information_accounts',
  'type' => 'link',
  'relationship' => 'bank_bank_information_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_BANK_INFORMATION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'bank_bank_information_accountsaccounts_ida',
);
$dictionary["bank_Bank_Information"]["fields"]["bank_bank_information_accounts_name"] = array (
  'name' => 'bank_bank_information_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BANK_BANK_INFORMATION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'bank_bank_information_accountsaccounts_ida',
  'link' => 'bank_bank_information_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["bank_Bank_Information"]["fields"]["bank_bank_information_accountsaccounts_ida"] = array (
  'name' => 'bank_bank_information_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'bank_bank_information_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BANK_BANK_INFORMATION_ACCOUNTS_FROM_BANK_BANK_INFORMATION_TITLE',
);
