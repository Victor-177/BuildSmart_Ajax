<?php
// Файл: process_request.php
require 'script.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение и очистка данных из формы
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $question = isset($_POST["question"]) ? trim($_POST["question"]) : "";
    $phone = isset($_POST["phone"]) ? trim($_POST["phone"]) : "";

    // Простейшая проверка: все поля должны быть заполнены
    if(empty($name) || empty($question) || empty($phone)){
        echo "Пожалуйста, заполните все обязательные поля.";
        exit;
    }

    // Сохранение данных формы в таблицу requests
    saveRequest($name, $question, $phone);

    // Перенаправление пользователя на страницу подтверждения
    header("Location: requestOk.php");
    exit;
} else {
    echo "Неверный метод запроса.";
}
?>
