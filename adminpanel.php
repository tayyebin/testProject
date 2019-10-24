<?php

session_start();

$name = $_SESSION['uname'];

if(! isset($_SESSION['uname'])){
    header('location: login.php');
    die();
}


require_once 'views/adminpanel.view.php';