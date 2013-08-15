<?php
 // created: 2013-04-10 12:14:14
$layout_defs["bank_Agreements"]["subpanel_setup"]['bank_agreements_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BANK_AGREEMENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'bank_agreements_accounts',
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
