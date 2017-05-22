<?php
/**
 * Description of SessionManager
 *
 * @author Damian Stępniak
 */
include_once './dbConnect.php';

class dbManage {

    private $db;
    private $stmt;

    public function __construct($db) {
        $this->db = $db->getConnect();
    }

    public function prepareQuery($query) {
        $this->stmt = $this->db->prepare($query);

        return $this->execude();
    }

    public function setQuery($query) {
        $this->stmt = $this->db->prepare($query);

        return $this;
    }
    
    public function setValue($key, $value)
    {
        $this->stmt->bindValue($key, $value);
        
        return $this;
    }

    public function execude() {
        return $this->stmt->execute();
    }
    
    public function getStm()
    {
        return $this->stmt;
    }

}
