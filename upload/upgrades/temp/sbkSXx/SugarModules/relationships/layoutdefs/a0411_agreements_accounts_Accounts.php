<?php
 // created: 2013-04-11 10:28:00
$layout_defs["Accounts"]["subpanel_setup"]['a0411_agreements_accounts'] = array (
  'order' => 100,
  'module' => 'a0411_agreements',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A0411_AGREEMENTS_ACCOUNTS_FROM_A0411_AGREEMENTS_TITLE',
  'get_subpanel_data' => 'a0411_agreements_accounts',
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
