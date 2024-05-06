<?php
$serverName = 'localhost';
$dbUsername = 'heshanperera';
$dbPassword = '80uctcAIa_7_baub';
$dbName = 'edupro';

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
    if (!$conn) {
        die('connection failed'. mysqli_connect_error());
    }
  /*  else {
        echo "working";
    }*/