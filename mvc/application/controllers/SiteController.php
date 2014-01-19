<?php

class SiteController extends BaseController {

    public function index() {
    
    	if(isset($_SESSION['user_id']) && strlen($_SESSION['user_id'])) {
    		$this->render('site/index');
    	} else {
			header('Location:index.php?q=users/login');
        }
    }

    public function view($id=0) {
    	$this->pageTitle = 'view action ' . $id;
    	$this->render('site/view');
    }

}
