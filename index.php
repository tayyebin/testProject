<?php
//var_dump($_GET);
//if($_SERVER['REQUEST_METHOD'] == 'POST')
//print_r($_POST);
session_start();
$_SESSION['uname'] = 'tayyebin';
require 'views/index.view.php';