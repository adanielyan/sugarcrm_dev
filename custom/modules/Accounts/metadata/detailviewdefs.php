<?php
// created: 2013-06-11 14:00:15
$viewdefs = array (
  'Accounts' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
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
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
              'displayParams' => 
              array (
                'enableConnectors' => true,
                'module' => 'Accounts',
                'connectors' => 
                array (
                  0 => 'ext_rest_linkedin',
                ),
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
              'name' => 'provider_web_site_c',
              'label' => 'LBL_PROVIDER_WEB_SITE',
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
            1 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
          ),
        ),
      ),
    ),
  ),
);