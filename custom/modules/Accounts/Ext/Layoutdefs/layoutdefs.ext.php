<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2013-04-30 14:31:09
$layout_defs["Accounts"]["subpanel_setup"]['accounts_a0423_agreements_1'] = array (
  'order' => 100,
  'module' => 'a0423_Agreements',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_A0423_AGREEMENTS_1_FROM_A0423_AGREEMENTS_TITLE',
  'get_subpanel_data' => 'accounts_a0423_agreements_1',
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


 // created: 2013-04-11 14:09:23
$layout_defs["Accounts"]["subpanel_setup"]['accounts_b0411_bankinfo_1'] = array (
  'order' => 100,
  'module' => 'b0411_Bankinfo',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_B0411_BANKINFO_1_FROM_B0411_BANKINFO_TITLE',
  'get_subpanel_data' => 'accounts_b0411_bankinfo_1',
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




$layout_defs['Accounts']['subpanel_setup']['securitygroups'] = array(
	'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect'),),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page'=>1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);





?>