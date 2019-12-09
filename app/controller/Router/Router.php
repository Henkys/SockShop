<?php


class Router
{

  public function __construct()
  { }

  public function __destruct()
  { }

  public function handleRequest()
  {
    try {
      $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
      switch ($op) {
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
    include '../app/view/Landingspage/Landingspage.php';
  }
}
