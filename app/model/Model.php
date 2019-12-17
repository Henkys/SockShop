<?php
require_once 'model/dataHandler.php';

class WerelddelenModel
{

  public function __construct()
  {
    $this->DataHandler = new DataHandler("localhost", "mysql", "themeSocks", "root", "");
  }
  public function __destruct()
  { }

}
