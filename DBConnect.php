<?php 
  class DbConnect {
    private $host = 'localhost';
    private $dbName = 'php_pdo';
    private $user = 'imon';
    private $pass = 'p@ssw0rd';

    public function connect() {
      try {
        $conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
        return $conn;
      } catch (PDOException $e) {
        echo 'Database error: ' . $e->getMessage();
      }
    }
  }