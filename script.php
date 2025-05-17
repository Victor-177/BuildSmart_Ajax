<?php
// Файл: script.php

// Функция подключения к базе данных MySQL
function dbConnect() {
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $dbname = 'buildsmart_db';
    
    $conn = new mysqli($host, $user, $password, $dbname);
    if($conn->connect_error){
        die("Ошибка подключения: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    return $conn;
}

// Функция получения списка услуг из базы данных
function getServices() {
    $conn = dbConnect();
    $sql = "SELECT * FROM services ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $services = [];
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $services[] = $row;
        }
    }
    $conn->close();
    return $services;
}

// Функция сохранения данных из формы обратной связи в базу данных
function saveRequest($name, $question, $phone) {
    $conn = dbConnect();
    $stmt = $conn->prepare("INSERT INTO requests (name, question, phone, created_at) VALUES (?, ?, ?, NOW())");
    if(!$stmt){
        die("Ошибка подготовки запроса: " . $conn->error);
    }
    $stmt->bind_param("sss", $name, $question, $phone);
    if(!$stmt->execute()){
        die("Ошибка выполнения запроса: " . $stmt->error);
    }
    $stmt->close();
    $conn->close();
}
?>
