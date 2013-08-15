<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2007 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
require_once('modules/DynamicFields/templates/Fields/TemplateField.php');
class TemplateFRPDFButton extends TemplateField{
        var $type='FRPDFButton';

        function get_xtpl_edit(){
                $name = $this->name;
                $returnXTPL = array();

                if(!empty($this->help)){
                    $returnXTPL[strtoupper($this->name . '_help')] = translate($this->help, $this->bean->module_dir);
                }

                if(isset($this->bean->$name)){
                    $returnXTPL[$this->name] = $this->bean->$name;
                }else{
                        if(empty($this->bean->id)){
                                 $returnXTPL[$this->name] =  $this->default_value;
                        }
                }
                return $returnXTPL;
        }
        function get_xtpl_search(){
                if(!empty($_REQUEST[$this->name])){
                        return $_REQUEST[$this->name];
                }
        }



        function get_xtpl_detail(){
                $name = $this->name;
                if(isset($this->bean->$name)){
                        return $this->bean->$name;      
                }
                return '';
                
        }

    function get_field_def() {

        global $_REQUEST;

        $def = parent::get_field_def();
        $def['ext2'] = $this->ext2;
        $def['source'] = 'non-db';
        $def['studio'] = 'visible';
        $def['default'] = !empty( $this->default) ? $this->default : !empty($this->default_value) ? $this->default_value : 'Get PDF';
        return array_merge($def, $this->get_additional_defs());
    }

    function get_db_type() {
      return parent::get_db_type();
    }

    function save($df){
        parent::save($df);
        if ($GLOBALS['db']->last_error) {
                $json = getJSONobj();
                echo 'result = ' . $json->encode(array('status' => 'failed'));
                exit(0);
        }
    }

    function get_db_add_alter_table($table) {
      return '';
    }

    function get_db_modify_alter_table($table) {
      return '';
    }

}


?>
