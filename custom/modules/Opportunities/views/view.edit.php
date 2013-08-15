<?php 
if (!defined('sugarEntry') || !sugarEntry) die('Not a Valid Entry Point'); 

require_once('include/MVC/View/views/view.edit.php'); 

class CustomViewEdit extends ViewEdit { 
     
    /** 
     * @see SugarView::PreDisplay() 
     */ 
    public function preDisplay() { 
	 if (isset($_REQUEST['relate_id'])){
            $query = "SELECT accounts.name as name, accounts.id as rel_account_id FROM accounts_a0423_agreements_1_c LEFT JOIN accounts ON accounts.id=accounts_a0423_agreements_1_c.accounts_a0423_agreements_1accounts_ida WHERE accounts_a0423_agreements_1a0423_agreements_idb = \"{$_REQUEST['relate_id']}\"";
            $result = $this->bean->db->query($query, true);
            $row = $this->bean->db->fetchByAssoc($result);
	 }
         parent::preDisplay(); 
    } 
} 
?>
