<?php
include 'application/models/User.php';
include 'application/models/Request.php';

class UsersController extends BaseController {

    public function login() {
        if ($_POST) {
            $check = User::checkUser($_POST['username'], $_POST['password']);

            if($check) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['user_id'] = $check['user_id'];
                $_SESSION['is_admin'] = $check['is_admin'];
                $_SESSION['name'] = $check['name'];

                header("Location:index.php?q=information/table");
            }
        }

        $this->render('users/login');
    }

    public function logout() {
        session_destroy();
        header('Location:index.php?q=users/login');
    }

    public function manageUsers() {
        $allUsers = User::getAllUsers();
        if($_SESSION['user_id']) {
             $this->render('users/manageUsers', $allUsers);
        } else {
             header("Location:index.php");
        }

    }

    public function addNewUser() {
        if ($_POST) {
            if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password']) && $_POST['type']!= "")
            {
                User::saveUser($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['type']);
                header("Location:index.php?q=users/manageUsers");
            } 
        }
        if($_SESSION['user_id']) {
            $this->render('users/addNewUser');
        } else {
             header("Location:index.php");
        }
    }

    public function deleteUser() {
        if ($_POST) {
            $user_id = $_POST['user_id'];

            if (!empty($user_id)) {
                User::deleteUser($user_id);
                header("Location:index.php?q=users/manageUsers");
            }
        }
    }
    
    public function acceptRequest() {
		$this->changeStatus(2);
		header("Location:index.php?q=users/manageUsers");
    }
    
    public function rejectRequest() {
		$this->changeStatus(3);
		header("Location:index.php?q=users/manageUsers");
    }
    
    public function changeStatus($status) {
        if ($_POST) {
            $request_id = $_POST['request_id'];

            if (!empty($request_id)) {
                Request::changeStatus($request_id, $status);
            }
        }
    }
}
