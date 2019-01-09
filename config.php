<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";

// khởi tạo kết nối

$conn = new mysqli($servername, $username, $password,$dbname) or die("kết nối thất bại".$conn->connect_error);
$conn->set_charset('utf8');



?>