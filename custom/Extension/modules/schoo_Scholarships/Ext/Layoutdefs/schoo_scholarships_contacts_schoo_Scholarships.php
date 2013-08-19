<?php
 // created: 2013-08-19 12:58:30
$layout_defs["schoo_Scholarships"]["subpanel_setup"]['schoo_scholarships_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SCHOO_SCHOLARSHIPS_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'schoo_scholarships_contacts',
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
