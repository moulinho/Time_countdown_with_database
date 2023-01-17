<?php
$servername = "172.19.0.2";
$username = "root";
$password = "example";
$dbNAme = "module";

try {
  $db = new PDO("mysql:host=$servername;dbname=", $username, $password,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>