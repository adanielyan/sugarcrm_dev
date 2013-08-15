<?php


require_once('data/SugarBean.php');

class CreateDisbursements {

    static $already_ran = false;
    
    function createDisbursements(&$bean, $event){
	if (empty($_REQUEST['record'])&& !empty($bean->id) && !empty($bean->number_of_periods) && $bean->number_of_periods>0){

	    for($i=1; $i<=$bean->number_of_periods; $i++) {
	    	$newDisbursement = BeanFactory::getBean('Opportunities'); //   <---- THIS MUST BE YOU MODULE NAME ...
            	$newDisbursement->name = $bean->name . " - " . $bean->report_cycle_type . " " . $i; //you can give the name you want.
		switch ($bean->report_cycle_type) {
			case "quarter":
				$interval = 3; 
				break;
			case "semester":
				$interval = 6;
				break;
			default:
				$interval = 6;
		}
				
		$startDate = new DateTime($bean->program_start_date);
		$newDisbursement->date_closed  = $startDate->modify('+'.$i*$interval.' months');
		$rel_name = 'a0423_agreements_opportunities_1';
            	$newDisbursement->save();
		$bean->load_relationship($rel_name);
                $bean->$rel_name->add($newDisbursement->id);
		if(!empty($_REQUEST['accounts_a0423_agreements_1accounts_ida'])) {
			$rel_name = 'opportunities';
			$provider = BeanFactory::getBean('Accounts');
	                $provider->retrieve($_REQUEST['accounts_a0423_agreements_1accounts_ida']);
			$provider->load_relationship($rel_name);
			$provider->$rel_name->add($newDisbursement->id);
		}
	    }
	}

    }
}
?>
