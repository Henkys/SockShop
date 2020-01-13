<?php
require_once '../app/model/dataHandler.php';

class SocksModel
{

  public function __construct()
  {
    $this->DataHandler = new DataHandler("localhost", "mysql", "themeSocks", "root", "");
  }
  public function __destruct()
  {
  }
  public function readSocksByTheme($mainThemeCode)
  {
    try {
      $sql = "SELECT DISTINCT * FROM producten
      NATURAL JOIN themes
      NATURAL JOIN mainthemes
      WHERE mainThemeCode = '$mainThemeCode'";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

  public function readMainThemeName($mainThemeCode)
  {
    try {
      $sql = "SELECT DISTINCT mainThemeName FROM producten
      NATURAL JOIN themes
      NATURAL JOIN mainthemes
      WHERE mainThemeCode = '$mainThemeCode'";
      $result = $this->DataHandler->readsData($sql)->fetch(PDO::FETCH_ASSOC);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

  public function readThemesByMainTheme($mainThemeCode)
  {
    try {
      $sql = "SELECT DISTINCT themeName, themeCode FROM producten
      NATURAL JOIN themes
      NATURAL JOIN mainthemes
      WHERE mainThemeCode = '$mainThemeCode'";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

}
