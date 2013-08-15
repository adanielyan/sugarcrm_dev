<?php
$module_name = 'b0411_Bankinfo';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ACCOUNTS_B0411_BANKINFO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_B0411_BANKINFO_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_B0411_BANKINFO_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'BENEFICIARY_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BENEFICIARY_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'BANK_COUNTRY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BANK_COUNTRY',
    'width' => '10%',
    'default' => true,
  ),
);
?>
