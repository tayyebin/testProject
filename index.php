<?php
//var_dump($_GET);
if($_SERVER['REQUEST_METHOD'] == 'POST')
print_r($_POST);
require 'index.view.php';