<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "redEdge";
// Создаем соединение
$conn = new mysqli($servername, $username, $password , $database);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";	
?>