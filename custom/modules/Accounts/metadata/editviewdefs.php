<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'country_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'task_name_c',
            'label' => 'LBL_TASK_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'provider_address_c',
            'label' => 'LBL_PROVIDER_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'provider_city_c',
            'label' => 'LBL_PROVIDER_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'provider_state_province_regi_c',
            'label' => 'LBL_PROVIDER_STATE_PROVINCE_REGI',
          ),
          1 => 
          array (
            'name' => 'provider_zip_code_c',
            'label' => 'LBL_PROVIDER_ZIP_CODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'duns_c',
            'label' => 'LBL_DUNS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'par_duns_c',
            'label' => 'LBL_PAR_DUNS',
          ),
          1 => 
          array (
            'name' => 'account_status_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_STATUS',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
