<?php
  //instantiate new pdo object and connect to database
  class Connection {
    private $host;
    private $dbname;
    private $username;
    private $password;

    public $DBH;

    function __construct() {
      $this->host = 'localhost';
      $this->dbname = 'OOP';
      $this->username = 'root';
      $this->password = 'root';

      $this->connect();
    }

    function connect() {
      try {
        $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo $e->getMessage();
      }
    }

    function insert($query) {
      $result = $this->DBH->query($query);
      if($result) {
        echo '<center><h2>Registration Successful!</h2></center>';
      } else {
        echo '<center><h2>Registration Failed!</h2></center>';
      }
    }

  }


 ?>
