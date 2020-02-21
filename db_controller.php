

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
try {
    $conn = new mysqli($servername,$username,$password,$dbname);
    // set the PDO error mode to exception
   
   
    }
catch(Exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>


