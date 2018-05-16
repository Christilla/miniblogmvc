<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Db {
private static $instance = NULL;
 
 private function __construct() {}
 
 private function __clone(){}
 
 
 public static function getInstance(){
  
  if (!isset(self::$instance)) {
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
   $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
//encodage de la base de données en utf8

   self::$instance = new PDO('mysql:host=localhost;dbname=miniblog_mvc', 'root', '', $pdo_options);
  }
  return self::$instance;
 }
 
}
?>