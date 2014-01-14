<?php

class SiteController extends BaseController {

    public function index() {
    
        $this->render('site/login');
    }

    public function view($id=0) {
    	$this->pageTitle = 'view action ' . $id;
    	$this->render('site/view');
    }

}
