<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];
include_once($ROOT . "/mvc/app/models/Users.php");
    class UsersView{
        public function showUser(){
        $user = new Users();
        $showuser = $user->getUser();
        while($row = $showuser->fetch()){
            echo $row['Name'];
        }
        
    }    
}
?>