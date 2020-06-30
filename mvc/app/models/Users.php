<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];
include_once($ROOT . "/mvc/app/connection/Database.php");
class Users{
     public function getUser(){
        $connect = new Database();
        $sql = "SELECT * FROM ime";
        $stmt=$connect->connect()->query($sql);
        return $stmt;
    }
}
?>