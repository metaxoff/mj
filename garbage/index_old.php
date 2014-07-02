<?php

session_start();
if (isset($_SESSION['isLogged'])) {
    include './content/header.php';
    include './content/content.php';
} else {
    require_once './content/login.php';;
}
  