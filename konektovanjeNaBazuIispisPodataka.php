<?php
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbIme = "web1vjezba";
    $con = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbIme);
    $db = mysqli_select_db($con ,'web1vjezba');
    if($con){
        echo 'Uspjesno ste konektovani na bazu podataka';
    }
    else{
        die('Greska.');
    }
    $sql = "SELECT ID, Ime, Prezime, Godine FROM imenaprezimenagodine";
    $result = mysqli_query($con,$sql);
    echo "<br>";
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "id: " . $row["ID"]. "-Ime: " . $row["Ime"]. "-Prezime: " . $row["Prezime"]. "-Godine: " . $row["Godine"];
        }
    }
?>
