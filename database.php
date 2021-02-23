<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $db = new PDO("mysql:host=$servername;dbname=module", $username, $password,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>