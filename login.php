<?php

session_start();
//print_r($_SESSION);
define("UNAME","tayyebin");
define("PASSWORD", "Mansour");
require_once 'functions.php';

if(isPost()){
    $uname = $_POST['uname'];
    $pass = $_POST['password'];
    if( ! empty($uname) && ! empty($pass)){
        if($uname == UNAME && $pass == PASSWORD){
            
            $_SESSION['uname'] = $uname;
            header('location: adminpanel.php');
            die;

        }
    }

}

require 'views/login.view.php';