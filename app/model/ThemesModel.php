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

  public function getSokDeals(){
    try{
      $sql = "SELECT * FROM `producten` WHERE productId = 7 OR productId = 8";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    }catch(exception $e){
      throw $e;
    }
  }

  public function getHappySocks(){
    try{
      $sql = "SELECT * FROM `producten` WHERE productId = 11";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    }catch(exception $e){
      throw $e;
    }
  }

  public function getKerstSocks(){
    try{
      $sql = "SELECT * FROM `producten` WHERE productId = 10";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    }catch(exception $e){
      throw $e;
    }
  }

  public function getSportSocks(){
    try{
      $sql = "SELECT * FROM `producten` WHERE productId = 12";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    }catch(exception $e){
      throw $e;
    }
  }
}