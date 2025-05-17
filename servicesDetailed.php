<?php
// Файл: servicesDetailed.php
require 'script.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $serviceId = intval($_GET['id']);
    $conn = dbConnect();
    $stmt = $conn->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->bind_param("i", $serviceId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $service = $result->fetch_assoc();
    } else {
        echo "Услуга не найдена.";
        exit;
    }
    $stmt->close();
    $conn->close();
} else {
    echo "Некорректный запрос.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($service['title']); ?> - BuildSmart</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- остальное подключение -->
</head>
<body>
  <header class="header">
    <div class="header-container">
      <div class="logo-block">
        <img src="photos/logo.png" alt="Логотип BuildSmart" class="logo">
      </div>
      <nav class="nav">
        <ul class="nav-list">
          <li><a href="index.php">Главная</a></li>
          <li><a href="about.php">О нас</a></li>
          <li><a href="contacts.php">Контакты</a></li>
          <li><a href="request.php">Обратная связь</a></li>
          <li><a href="services.php">Услуги</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="service-detailed-page">
    <h1 class="service-detailed-title"><?php echo htmlspecialchars($service['title']); ?></h1>
    <p class="service-detailed-intro">
      <?php echo nl2br(htmlspecialchars($service['description'])); ?>
    </p>
    <div class="service-detailed-image-block">
      <img src="<?php echo htmlspecialchars($service['image_url']); ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" class="service-detailed-image">
    </div>
    <div class="service-button-wrapper">
      <a href="request.php" class="service-button">Оставить заявку</a>
    </div>
  </main>
  <!-- Подвал и скрипты -->
  <footer class="footer">
    <div class="footer-container">
      <p class="footer-title">BuildSmart</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
