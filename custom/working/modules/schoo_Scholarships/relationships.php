<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$relationships = array (
  'schoo_scholarships_modified_user' => 
  array (
    'id' => '45585be0-f0e4-293f-87a0-52124efb9fcf',
    'relationship_name' => 'schoo_scholarships_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'schoo_Scholarships',
    'rhs_table' => 'schoo_scholarships',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'schoo_scholarships_created_by' => 
  array (
    'id' => '45afb64b-bcd0-370e-0307-52124ed36de8',
    'relationship_name' => 'schoo_scholarships_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'schoo_Scholarships',
    'rhs_table' => 'schoo_scholarships',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'schoo_scholarships_assigned_user' => 
  array (
    'id' => '45e642d8-d932-cc3f-d8cd-52124e61c83b',
    'relationship_name' => 'schoo_scholarships_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'schoo_Scholarships',
    'rhs_table' => 'schoo_scholarships',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'schoo_scholarships_contacts' => 
  array (
    'id' => '7212a345-d889-be61-32df-52124e7fe1ea',
    'relationship_name' => 'schoo_scholarships_contacts',
    'lhs_module' => 'schoo_Scholarships',
    'lhs_table' => 'schoo_scholarships',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'join_table' => 'schoo_scholarships_contacts_c',
    'join_key_lhs' => 'schoo_scholarships_contactsschoo_scholarships_ida',
    'join_key_rhs' => 'schoo_scholarships_contactscontacts_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'schoo_scholarships_a0423_agreements' => 
  array (
    'id' => '72dcd17c-7e62-e75a-0dc6-52124e6770d0',
    'relationship_name' => 'schoo_scholarships_a0423_agreements',
    'lhs_module' => 'schoo_Scholarships',
    'lhs_table' => 'schoo_scholarships',
    'lhs_key' => 'id',
    'rhs_module' => 'a0423_Agreements',
    'rhs_table' => 'a0423_agreements',
    'rhs_key' => 'id',
    'join_table' => 'schoo_scholarships_a0423_agreements_c',
    'join_key_lhs' => 'schoo_scholarships_a0423_agreementsschoo_scholarships_ida',
    'join_key_rhs' => 'schoo_scholarships_a0423_agreementsa0423_agreements_idb',
    'relationship_type' => 'one-to-one',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'schoo_scholarships_accounts' => 
  array (
    'id' => '74efc266-fe48-4e90-2c9d-52124e3f4c10',
    'relationship_name' => 'schoo_scholarships_accounts',
    'lhs_module' => 'schoo_Scholarships',
    'lhs_table' => 'schoo_scholarships',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'join_table' => 'schoo_scholarships_accounts_c',
    'join_key_lhs' => 'schoo_scholarships_accountsschoo_scholarships_ida',
    'join_key_rhs' => 'schoo_scholarships_accountsaccounts_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'schoo_scholarships_activities_1_calls' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Scholarships',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'schoo_Scholarships',
    'rhs_module' => 'Calls',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'schoo_scholarships_activities_1_calls',
  ),
  'schoo_scholarships_activities_1_meetings' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Scholarships',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'schoo_Scholarships',
    'rhs_module' => 'Meetings',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'schoo_scholarships_activities_1_meetings',
  ),
  'schoo_scholarships_activities_1_notes' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Scholarships',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'schoo_Scholarships',
    'rhs_module' => 'Notes',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'schoo_scholarships_activities_1_notes',
  ),
  'schoo_scholarships_activities_1_tasks' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Scholarships',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'schoo_Scholarships',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'schoo_scholarships_activities_1_tasks',
  ),
  'schoo_scholarships_activities_1_emails' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Scholarships',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'schoo_Scholarships',
    'rhs_module' => 'Emails',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'schoo_scholarships_activities_1_emails',
  ),
);