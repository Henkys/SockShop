<?php
    include '../app/controller/Router/MainController.php';

    class Router {

        public function __construct()
        {
            $this->MainController = new MainController();
        }

        public function __destruct()
        {
            
        }

        public function handleRequest()
        {
            try {
                $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
                switch($op) {
                    default:
                        $this->collectLandingsPage();
                        break;
                }
            } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }
        }

        public function collectLandingsPage()
        {
            $mainThemes = $this->MainController->getLandingsPage();
            include '../app/view/Landingspage/Landingspage.php';
        }

    }


?>