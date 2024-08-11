<?php
  // Database configuration
  $servername = "localhost";
  $username = "root";
  $password = getenv('DB_ROOT_PASSWORD');
  $dbname = "mydatabase";
  // never test

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>