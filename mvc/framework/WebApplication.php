<?php

include('BaseController.php');

class WebApplication {
    public function processRequest() {
        try {
            $route = array();
            $route['params'] = array();
        
            if (isset($_GET['q']) ) {
                $query_string = $_GET['q'];
                $query_array = explode('/', $query_string);
                if (count($query_array) < 2) {
                    throw new Exception('Not valid path');
                }
                $route['controller'] = $query_array[0];
                $route['action'] = $query_array[1];

                if (count($query_array) > 2) {
                    for($i = 2; $i<count($query_array); $i++) {
                        $route['params'][] = $query_array[$i];
                    }
                }
            } else {
                $route['controller'] = 'site';
                $route['action'] = 'index';
            }
        
            $this->runAction($route);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function runAction($route) {    
        $controller = BaseController::getInstance($route['controller']);
        if ($controller) {
            $controller->run($route['action'], $route['params']);
            return;
        }
        
        throw new Exception('controller ' . $route['controller'] . ' is not valid controller path');
    }
}
