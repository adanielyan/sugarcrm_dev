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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'bank',
  'author' => 'Techlab360',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Bankinfopack',
  'published_date' => '2013-04-10 16:14:14',
  'type' => 'module',
  'version' => 1365610454,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Bankinfopack',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'bank_Bank_Information',
      'class' => 'bank_Bank_Information',
      'path' => 'modules/bank_Bank_Information/bank_Bank_Information.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'bank_Agreements',
      'class' => 'bank_Agreements',
      'path' => 'modules/bank_Agreements/bank_Agreements.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/bank_bank_information_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/bank_agreements_accounts_bank_Agreements.php',
      'to_module' => 'bank_Agreements',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/bank_bank_information_accountsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/bank_agreements_accountsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/bank_Bank_Information',
      'to' => 'modules/bank_Bank_Information',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/bank_Agreements',
      'to' => 'modules/bank_Agreements',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/bank_Bank_Information.php',
      'to_module' => 'bank_Bank_Information',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/bank_Agreements.php',
      'to_module' => 'bank_Agreements',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bank_bank_information_accounts_bank_Bank_Information.php',
      'to_module' => 'bank_Bank_Information',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bank_bank_information_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bank_agreements_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/bank_agreements_accounts_bank_Agreements.php',
      'to_module' => 'bank_Agreements',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'Accounts' => 'bank_agreements_accounts_name',
      ),
    ),
  ),
);