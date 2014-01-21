<?php
include 'application/models/Request.php';

class RequestController extends BaseController {

	public function form() {
    	$this->render('request/form');
    }
    
    public function vacationRequest() {
		if (count($_POST)) {

			 if(!empty($_POST['from']) && !empty($_POST['to']) && $_POST['type'] != 4)
			 {
			 	 $status = 0;
				 Request::saveRequest($_SESSION['user_id'], $status, $_POST['from'], $_POST['to'], 
				 				$_POST['type'], $_POST['comment']);
				 				
				 header("Location:index.php");
// 				 $this->render('site/index');

			 } else {
			 	// justr test
			 	header('Location:index.php?q=users/login');
			 }
 		 } else {
 		 	header("Location:index.php");
 		 }	
    }
}
