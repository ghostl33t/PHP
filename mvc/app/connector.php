<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];
include_once($ROOT . "/mvc/app/views/UsersView.php");
$value = $_POST['Test'];
if($value == 1 ){
    $test = new UsersView();
    $test->showUser();
}
?>