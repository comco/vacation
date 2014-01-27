<?php
include 'application/models/User.php';

class UsersController extends BaseController {

    public function login() {
        if ($_POST) {
          	$check = User::checkUser($_POST['username'], $_POST['password']);

        	if($check) {
        		  $_SESSION['username'] = $_POST['username'];
        		  $_SESSION['user_id'] = $check['user_id'];
        		  $_SESSION['is_admin'] = $check['is_admin'];
        		  $_SESSION['name'] = $check['name'];
        		  header("Location:index.php?q=request/form");
          	}
        }

    	$this->render('users/login');
    }
    
    public function logout() {
    	session_destroy();
    	header('Location:index.php?q=users/login');
    }
}
