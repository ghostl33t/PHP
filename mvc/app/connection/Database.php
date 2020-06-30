<?php 
class Database{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $conn;
    function __construct($host = 'localhost', $username="root", $password="", $dbname="baza"){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password; 
        $this->dbname = $dbname;
        $this->conn = null; 
    }
    public function connect (){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
?>