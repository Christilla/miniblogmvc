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
<<<<<<< HEAD
//   self::$instance = new PDO('mysql:host=localhost;dbname=miniblog_mvc', 'root', '');
=======
>>>>>>> 27f435d8f3569c5e68b47aad29af84d6431ddf8b
   self::$instance = new PDO('mysql:host=localhost;dbname=miniblog_mvc', 'root', '', $pdo_options);
  }
  return self::$instance;
 }
 
}
?>