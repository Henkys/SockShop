<?php
include '../app/controller/Router/MainController.php';
include '../app/controller/Router/SockController.php';

class Router
{

    public function __construct()
    {
        $this->MainController = new MainController();
        $this->SockController = new SockController();
    }

    public function __destruct()
    {
    }

    public function handleRequest()
    {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
            switch ($op) {
                case 'themeSocks':
                    $this->collectThemePage($_REQUEST['code']);
                    break;
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
        $sokDeals = $this->MainController->getSokDeals();
        $happySocks = $this->MainController->getHappySocks();
        $kerstSocks  = $this->MainController->getKerstSocks();
        $sportSocks = $this->MainController->getSportSocks();
        include '../app/view/Landingspage/Landingspage.php';
    }

    public function collectThemePage($mainThemeCode)
    {
        $socks = $this->SockController->getSocksForTheme($mainThemeCode);
        $mainThemeName = $this->SockController->getMainThemeName($mainThemeCode);
        $themes = $this->SockController->getThemes($mainThemeCode);
        include_once '../app/view/themePage/socksOverview.php';
    }
}
