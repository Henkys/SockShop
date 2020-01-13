<?php
include '../app/model/SocksModel.php';
class SockController
{
  public function __construct()
  {
    $this->SocksModel = new SocksModel();
  }

  public function __destruct()
  {
  }

  public function getSocksForTheme($mainThemeCode)
  {
    $socks = $this->SocksModel->readSocksByTheme($mainThemeCode);
    return $socks;
  }

  public function getMainThemeName($mainThemeCode)
  {
    $mainThemeName = $this->SocksModel->readMainThemeName($mainThemeCode);
    return $mainThemeName;
  }

  public function getThemes($mainThemeCode)
  {
    $themes = $this->SocksModel->readThemesByMainTheme($mainThemeCode);
    return $themes;
  }
}
