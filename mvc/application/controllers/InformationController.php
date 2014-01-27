<?php
include 'application/models/information.php';

class InformationController extends BaseController {

	public function table() {
    	$this->render('information/table');
    }

    public function form() {
    	$this->render('information/form');
    }
    
    public function vacationInformation() {
    	if (count($_POST)) {

			 if(!empty($_POST['from']) && !empty($_POST['to']))
			 {
			 	var_dump($_POST);
				 $vacations = information::getInformation($_SESSION['user_id'], $_POST['from'], $_POST['to'], 
				 				$_POST['type']);
				 				
				var_dump($vacations);
 				 $this->render('information/table', $vacations);

			 } else {
			 	// justr test
			 	header('Location:index.php?q=users/login');
			 }
 		 } else {
 		 	header("Location:index.php");
 		 }	
	
    }
}
