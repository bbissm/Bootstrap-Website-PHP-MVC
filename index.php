<?php
   // error_reporting(E_COMPILE_ERROR | E_RECOVERABLE_ERROR | E_ERROR | E_CORE_ERROR);
   error_reporting(E_ERROR | E_WARNING | E_PARSE);
   // error_reporting(E_ALL);
   ini_set('display_errors', 'on');
   session_start();
   require_once "config.php";
   
   $_SESSION["db"]  = new mysqli(config::DBHOST, config::DBUSERNAME, config::DBPASSWORD, config::DBNAME);
   $_SESSION["db"]->set_charset("utf8");
   $_SESSION["path"] = $_SERVER['REQUEST_URI'];
   echo $_SESSION["db"]->error;
   include "templates/index2.php";
   
   
   ?>