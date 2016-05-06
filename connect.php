<?php
    //instantiate new pdo object and connect to database
  try {
    $handler = new PDO('mysql:host=localhost;db_name=OOP',"","");
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo $e->getMessage();
    die();
  }
 ?>
