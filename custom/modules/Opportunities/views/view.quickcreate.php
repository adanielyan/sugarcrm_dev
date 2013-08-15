<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not a Valid Entry Point');

require_once('include/MVC/View/views/view.quickcreate.php');

class OpportunitiesViewQuickcreate extends ViewQuickcreate {

    /**
     * @see SugarView::PreDisplay()
     */
    public function preDisplay() {
	 parent::preDisplay();
         $this->bean->next_step = 'Hello!';
         $this->bean->name = 'Hello World!';
         if (isset($_REQUEST['parent_type']) && $_REQUEST['parent_type'] == 'a0423_Agreements'){
            $query = "SELECT accounts.name as name, accounts.id as rel_account_id FROM accounts_a0423_agreements_1_c LEFT JOIN accounts ON accounts.id=accounts_a0423_agreements_1_c.accounts_a0423_agreements_1accounts_ida WHERE accounts_a0423_agreements_1a0423_agreements_idb = \"{$_REQUEST['parent_id']}\"";
            $result = $this->bean->db->query($query, true);
            $row = $this->bean->db->fetchByAssoc($result);
            $_REQUEST['account_name'] = $row['name'];
            $_REQUEST['account_id'] = $row['rel_account_id'];
	    $_REQUEST['next_step'] = $row['name'];
         }
	 $_REQUEST['next_step'] = 'Hey Dude!';
    }
}
?>
