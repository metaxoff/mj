<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
session_start();
if (isset($_SESSION['isLogged'])) {
    require_once './content.php';
} else { 
    require_once  './login.php';
}
     