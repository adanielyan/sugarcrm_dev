<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2013-08-13 15:35:57
$layout_defs["Contacts"]["subpanel_setup"]['contacts_a0423_agreements_1'] = array (
  'order' => 100,
  'module' => 'a0423_Agreements',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_A0423_AGREEMENTS_1_FROM_A0423_AGREEMENTS_TITLE',
  'get_subpanel_data' => 'contacts_a0423_agreements_1',
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



$layout_defs['Contacts']['subpanel_setup']['securitygroups'] = array(
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





//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['a0411_agreements_contacts_1']['override_subpanel_name'] = 'Contact_subpanel_a0411_agreements_contacts_1';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['contacts_a0411_agreements_1']['override_subpanel_name'] = 'Contact_subpanel_contacts_a0411_agreements_1';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['a0411_agreements_contacts_2']['override_subpanel_name'] = 'Contact_subpanel_a0411_agreements_contacts_2';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['contacts_a0411_agreements_2']['override_subpanel_name'] = 'Contact_subpanel_contacts_a0411_agreements_2';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['a0411_agreements_contacts_3']['override_subpanel_name'] = 'Contact_subpanel_a0411_agreements_contacts_3';

?>