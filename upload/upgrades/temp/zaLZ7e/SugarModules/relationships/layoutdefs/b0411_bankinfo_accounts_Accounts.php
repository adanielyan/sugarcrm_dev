<?php
 // created: 2013-04-11 09:18:28
$layout_defs["Accounts"]["subpanel_setup"]['b0411_bankinfo_accounts'] = array (
  'order' => 100,
  'module' => 'b0411_Bankinfo',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_B0411_BANKINFO_ACCOUNTS_FROM_B0411_BANKINFO_TITLE',
  'get_subpanel_data' => 'b0411_bankinfo_accounts',
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
