<?php
// Файл: ajax.php
header('Content-Type: application/json; charset=utf-8');
require 'script.php';

// Соединение с базой и установка кодировки
$conn = dbConnect();

// Если это POST-запрос — сохраняем новую заявку, затем возвращаем полный список
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем сырые данные
    $имяПользователя  = isset($_POST['name'])     ? trim($_POST['name'])     : '';
    $вопросПользователя = isset($_POST['question']) ? trim($_POST['question']) : '';
    $телефонПользователя = isset($_POST['phone'])    ? trim($_POST['phone'])    : '';

    // Простейшая валидация
    if ($имяПользователя === '' || $вопросПользователя === '' || $телефонПользователя === '') {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'Пожалуйста, заполните все обязательные поля.'
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Подготовка запроса на вставку
    $подготовленныйЗапрос = $conn->prepare(
        "INSERT INTO requests (name, question, phone, created_at) VALUES (?, ?, ?, NOW())"
    );
    if ($подготовленныйЗапрос === false) {
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => 'Ошибка подготовки запроса: ' . $conn->error
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }
    $подготовленныйЗапрос->bind_param(
        "sss",
        $имяПользователя,
        $вопросПользователя,
        $телефонПользователя
    );
    if (! $подготовленныйЗапрос->execute()) {
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => 'Ошибка выполнения запроса: ' . $подготовленныйЗапрос->error
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }
    $подготовленныйЗапрос->close();
}

// Теперь в любом случае (GET или после успешного POST) возвращаем список всех заявок
$списокЗаявок = [];
$sqlЗапрос = "SELECT id, name, question, phone, DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s') AS created_at FROM requests ORDER BY created_at DESC";
$result = $conn->query($sqlЗапрос);
if ($result !== false) {
    while ($строка = $result->fetch_assoc()) {
        $списокЗаявок[] = $строка;
    }
}
$conn->close();

// Возвращаем JSON с массивом заявок
echo json_encode([
    'status' => 'success',
    'requests' => $списокЗаявок
], JSON_UNESCAPED_UNICODE);
exit;
