<?php

require_once(__DIR__.'/config.php');

try {
  $conn = new PDO("mysql:host=$pdo_host;dbname=$pdo_dbnm", $pdo_user, $pdo_pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>