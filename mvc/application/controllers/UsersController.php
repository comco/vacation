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
        $this->render('users/manageUsers', $allUsers);
    }

    public function addNewUser() {
        if ($_POST) {
            if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password']) && $_POST['type']!= "")
            {
                User::saveUser($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['type']);
                header("Location:index.php?q=users/manageUsers");
            } 
        }

        $this->render('users/addNewUser');
    }

    public function deleteUser() {
        var_dump($_POST);
        if ($_POST) {
            $user_id = $_POST['user_id'];

            if (!empty($user_id)) {
                User::deleteUser($user_id);
                header("Location:index.php?q=users/manageUsers");
            }
        }
    }
}
