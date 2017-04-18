<?php

//main database access object class
class Dao {

    private $db = null;

    //create database connection
    public function getDb() {
        $dsn = "mysql:host=localhost;dbname=srb;charset=utf8";
        $username = 'root';
        $password = '';
        //if the database is loaded, return it
        if ($this->db !== null) {
            return $this->db;
        }
        //otherwise attempt to establish a connection using supplied parameters
        try {
            $this->db = new PDO($dsn, $username, $password);
        } catch (Exception $ex) {
            throw new Exception('database connection error');
        }
        //and then return the database
        return $this->db;
    }

    private static function throwDbError(array $params) {
        throw new Exception('DB error[' . $errorInfo[0] . ',' . $errorInfo[1] . ']:' . errorInfo[2]);
    }

    public function executeStatement(PDOStatement $statement, array $params) {
        if (!$statement->execute($params)) {
            self::throwDbError($this->getDb()->errorInfo());
        }
    }

    public function query($sql) {
        $statement = $this->getDb()->query($sql, PDO::FETCH_ASSOC);
        return $statement;
    }

}
