<?php
$module_name = 'b0423_Bank_Information';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_acc_number',
            'label' => 'LBL_BENEFICIARY_ACC_NUMBER',
          ),
          1 => 
          array (
            'name' => 'bank_name',
            'label' => 'LBL_BANK_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bank_city',
            'label' => 'LBL_BANK_CITY',
          ),
          1 => 
          array (
            'name' => 'bank_country',
            'studio' => 'visible',
            'label' => 'LBL_BANK_COUNTRY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bank_branch',
            'label' => 'LBL_BANK_BRANCH',
          ),
          1 => 
          array (
            'name' => 'swift_code',
            'label' => 'LBL_SWIFT_CODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'iban_code',
            'label' => 'LBL_IBAN_CODE',
          ),
          1 => 
          array (
            'name' => 'wire_transfer',
            'label' => 'LBL_WIRE_TRANSFER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'wire_transfer_alternative',
            'label' => 'LBL_WIRE_TRANSFER_ALTERNATIVE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'interm_bank',
            'label' => 'LBL_INTERM_BANK',
          ),
          1 => 
          array (
            'name' => 'interm_bank_name',
            'label' => 'LBL_INTERM_BANK_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'interm_bank_city',
            'label' => 'LBL_INTERM_BANK_CITY',
          ),
          1 => 
          array (
            'name' => 'interm_bank_country',
            'studio' => 'visible',
            'label' => 'LBL_INTERM_BANK_COUNTRY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'interm_bank_acc_number',
            'label' => 'LBL_INTERM_BANK_ACC_NUMBER',
          ),
          1 => 
          array (
            'name' => 'interm_bank_swift_code',
            'label' => 'LBL_INTERM_BANK_SWIFT_CODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'interm_bank_aba_routing_number',
            'label' => 'LBL_INTERM_BANK_ABA_ROUTING_NUMBER',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
