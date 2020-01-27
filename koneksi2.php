<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "pdocrud";

$conn2 = mysqli_connect($host,$user,$pass);
mysqli_select_db($conn2,$db);
