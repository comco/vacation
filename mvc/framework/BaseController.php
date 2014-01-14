<?php
session_start(); 

class BaseController {
    public $layout = 'layout';
    public $pageTitle = null;

    public static function getInstance($class) {
        $class = ucfirst(strtolower($class));
    
        $file = "./application/controllers/{$class}Controller.php";
        
        if(is_file($file)) {
            require_once($file);
            $class_name = $class."Controller";
            return new $class_name();
        } else {
            return null;
        }
    }

    public function run($action, $params) {
        call_user_func_array(array($this, $action), $params);
    	//$this->$action($params);
    }

    public function render($file, $params = array()) {
    	ob_start();
        ob_implicit_flush(false);
        $content = $this->getVeiw($file, $params);
        require('./application/views/layout/'.$this->layout.'.php');
        
        echo ob_get_clean();
    }

    private function getVeiw($file, $params) {
        $view_file = './application/views/'.$file.'.php';
        ob_start();
        ob_implicit_flush(false);
        require($view_file);

        return ob_get_clean();
    }
}
