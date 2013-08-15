<?php
 // created: 2013-04-10 12:14:14
$layout_defs["Accounts"]["subpanel_setup"]['bank_bank_information_accounts'] = array (
  'order' => 100,
  'module' => 'bank_Bank_Information',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BANK_BANK_INFORMATION_ACCOUNTS_FROM_BANK_BANK_INFORMATION_TITLE',
  'get_subpanel_data' => 'bank_bank_information_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
