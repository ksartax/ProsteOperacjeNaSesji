<?php

class dbConnect {

    private $db;
    private $dbName;
    private $dbPassword;
    private $dbUsernname;

    public function __construct($dbname = 'backbone', $username = 'root', $dbpassword = '') {
        $this->dbName = $dbname;
        $this->dbPassword = $dbpassword;
        $this->dbUsernname = $username;
    }

    private function connect() {
        $this->db = new PDO("mysql:host=localhost;dbname={$this->dbName}", "{$this->dbUsernname}", "{$this->dbPassword}");

        return $this->db;
    }

    public function getConnect() {
        if (empty($_SESSION['db'])) {
            $_SESSION['db'] = $this->connect();
        }

        return $_SESSION['db'];
    }

}

?>
