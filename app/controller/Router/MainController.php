<?php
include '../app/model/ThemesModel.php';
class MainController
{
  public function __construct()
  {
    $this->ThemesModel = new ThemesModel();
  }

  public function __destruct()
  {
  }

  public function getLandingsPage()
  {
    $mainThemes = $this->ThemesModel->readMainThemes();
    return $mainThemes;
  }

  public function getSokDeals(){
    $sokDeals = $this->ThemesModel->getSokDeals();
    return $sokDeals;
  }
}
