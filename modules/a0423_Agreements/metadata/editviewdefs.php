<?php
$module_name = 'a0423_Agreements';
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
        'LBL_EDITVIEW_PANEL2' => 
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
      'syncDetailEditViews' => false,
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
            'name' => 'agreement_number',
            'label' => 'LBL_AGREEMENT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'proposal_approved_date',
            'label' => 'LBL_PROPOSAL_APPROVED_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'agreement_date',
            'label' => 'LBL_AGREEMENT_DATE',
          ),
          1 => 
          array (
            'name' => 'agreemment_budget',
            'label' => 'LBL_AGREEMMENT_BUDGET',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'po_number',
            'label' => 'LBL_PO_NUMBER',
          ),
          1 => 
          array (
            'name' => 'fiscal_year',
            'studio' => 'visible',
            'label' => 'LBL_FISCAL_YEAR',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'program_start_date',
            'label' => 'LBL_PROGRAM_START_DATE',
          ),
          1 => 
          array (
            'name' => 'program_end_date',
            'label' => 'LBL_PROGRAM_END_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'number_of_participants',
            'label' => 'LBL_NUMBER_OF_PARTICIPANTS',
          ),
          1 => 
          array (
            'name' => 'report_cycle',
            'label' => 'LBL_REPORT_CYCLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'report_cycle_type',
            'studio' => 'visible',
            'label' => 'LBL_REPORT_CYCLE_TYPE',
          ),
          1 => 
          array (
            'name' => 'number_of_periods',
            'label' => 'LBL_NUMBER_OF_PERIODS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'number_of_payments',
            'label' => 'LBL_NUMBER_OF_PAYMENTS',
          ),
          1 => 
          array (
            'name' => 'sub_agreement_status',
            'studio' => 'visible',
            'label' => 'LBL_SUB_AGREEMENT_STATUS',
          ),
        ),
        8 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'budgeted_award_amount',
            'label' => 'LBL_BUDGETED_AWARD_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'budgeted_instr_exp',
            'label' => 'LBL_BUDGETED_INSTR_EXP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'budgeted_materials_exp',
            'label' => 'LBL_BUDGETED_MATERIALS_EXP',
          ),
          1 => 
          array (
            'name' => 'budgeted_tranportation_exp',
            'label' => 'LBL_BUDGETED_TRANPORTATION_EXP',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'budgeted_activity_exp',
            'label' => 'LBL_BUDGETED_ACTIVITY_EXP',
          ),
          1 => 
          array (
            'name' => 'budgeted_administrative_exp',
            'label' => 'LBL_BUDGETED_ADMINISTRATIVE_EXP',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'budgeted_food_exp',
            'label' => 'LBL_BUDGETED_FOOD_EXP',
          ),
          1 => 
          array (
            'name' => 'budgeted_accommodation_exp',
            'label' => 'LBL_BUDGETED_ACCOMMODATION_EXP',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_afterschool_instr_hrs',
            'label' => 'LBL_TOTAL_AFTERSCHOOL_INSTR_HRS',
          ),
          1 => 
          array (
            'name' => 'afterschool_instr_hrs_per_week',
            'label' => 'LBL_AFTERSCHOOL_INSTR_HRS_PER_WEEK',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'number_of_afterschool_weeks',
            'label' => 'LBL_NUMBER_OF_AFTERSCHOOL_WEEKS',
          ),
          1 => 
          array (
            'name' => 'total_intens_session_instr_hrs',
            'label' => 'LBL_TOTAL_INTENS_SESSION_INSTR_HRS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'number_of_intens_sessions',
            'label' => 'LBL_NUMBER_OF_INTENS_SESSIONS',
          ),
          1 => 
          array (
            'name' => 'intens_sessions_hrs_per_week',
            'label' => 'LBL_INTENS_SESSIONS_HRS_PER_WEEK',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'number_of_intens_session_weeks',
            'label' => 'LBL_NUMBER_OF_INTENS_SESSION_WEEKS',
          ),
          1 => 
          array (
            'name' => 'total_instr_hrs',
            'label' => 'LBL_TOTAL_INSTR_HRS',
          ),
        ),
      ),
    ),
  ),
);
?>
