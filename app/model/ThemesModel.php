<?php
require_once '../app/model/dataHandler.php';

class ThemesModel
{

  public function __construct()
  {
    $this->DataHandler = new DataHandler("localhost", "mysql", "themeSocks", "root", "");
  }
  public function __destruct()
  {
  }
  public function readMainThemes()
  {
    try {
      $sql = "SELECT DISTINCT * FROM mainThemes";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

}