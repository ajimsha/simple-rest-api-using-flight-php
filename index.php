<?php
require 'flight/Flight.php';

Flight::route('GET /users/', function () {
  
 
 require_once('db_controller.php');
 $query = "select * from table_name";
 $result = $conn->query($query);
 while ($row = $result->fetch_assoc()){
$data[] = $row;
 }
 Flight::json($data);
 
});

Flight::start();
