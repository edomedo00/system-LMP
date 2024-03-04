<?php
  $server="mysql:dbname:system_lmp;localhost:8889";
  $user="root";
  $password="root";
  try {
    $pdo = new PDO($server, $user, $password);
  } catch (PDOException $e) {
    echo "Unable to connect" . $e;
  }
