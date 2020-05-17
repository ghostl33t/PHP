<?php 
class Test extends Database{
    public function getUsers()
    {
        $sql = "SELECT * FROM Korisnici";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo '<tr> <td>' . $row['Ime'] . '</td> <td>' . $row['Prezime'] . '</td></tr>';
        }
    }
}

?>