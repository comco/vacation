<?php
include 'application/models/Information.php';

class InformationController extends BaseController {

	public function table() {
		if($_SESSION['is_admin']) {
			$vacations = information::getInformation(null, null, null, 
				 				'all', 'pending', 'start_date', 'ASC');
		}
		else {
			$vacations = information::getInformation($_SESSION['user_id'], null, null, 
				 				'all', 'all', 'start_date', 'DESC');	
		}

    	$this->render('information/table', $vacations);
    }

    public function form() {
    	$this->render('information/form');
    }


    public function getPendingVacations($user_id)
    {
    	$vacations = information::getInformation($user_id, null, null, 
				 				'all', 'pending', 'start_date', 'DESC');
				 				
		//var_dump($vacations);
		 $this->render('information/table', $vacations);
    }
    
    public function getAllRequestsFromUser()
    {
    	$user_id = $_POST['user_id'];
    	$vacations = information::getInformation($user_id, null, null, 
				 				'all', 'all', 'start_date', 'DESC');
				 				
// 		var_dump($vacations);
		 $this->render('information/table', $vacations);
    }
    
    public function vacationInformation() {
    	if (count($_POST)) {

			//var_dump($_POST);
			$vacations = information::getInformation($_SESSION['user_id'], $_POST['from'], $_POST['to'], 
			$_POST['type'], $_POST['status'], 'start_date', 'DESC');
						  
			//var_dump($vacations);
			$this->render('information/table', $vacations);

	  } else {
		 header("Location:index.php");
	  }	
	 }
 }
