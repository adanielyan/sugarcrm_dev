<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('data/SugarBean.php');

class Saving {
    
    function populateProvider(&$bean, $event){
	if (isset($_REQUEST['relate_id'])){
            $query = "SELECT accounts.name as name, accounts.id as rel_account_id FROM accounts_a0423_agreements_1_c LEFT JOIN accounts ON accounts.id=accounts_a0423_agreements_1_c.accounts_a0423_agreements_1accounts_ida WHERE accounts_a0423_agreements_1a0423_agreements_idb = \"{$_REQUEST['relate_id']}\"";
            $result = $bean->db->query($query, true);
            $row = $bean->db->fetchByAssoc($result);
//	    $bean->load_relationship('accounts_opportunities');
//	    $bean->accounts_opportunities->add($row['rel_account_id']);
//	    $bean->next_step = "\nSaved on ". date("Y-m-d g:i a");
	    //$_POST['account_id'] = $row['rel_account_id'];
	    //$_POST['account_name'] = $row['name'];
	}

    }
}
?>
