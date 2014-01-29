<?php
include 'application/models/Days.php';

class DaysController extends BaseController {
    public function form() {
        if (count($_POST) && !empty($_POST['user_id'])) {
            $_SESSION['new_user_id'] = $_POST['user_id'];
            $this->render('days/form');
        }
    }

    public function addDays() {
        if(count($_POST) && !empty($_POST['user_id']) && !empty($_POST['type']) && !empty($_POST['days']))
        {
            Days::addDays($_POST['user_id'], $_POST['type'], $_POST['days']);
        }
        header("Location:index.php?q=request/form");
    }
}
