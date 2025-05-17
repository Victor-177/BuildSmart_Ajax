<?php
// Файл: services.php
require 'script.php';
$servicesList = getServices();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>BuildSmart - Услуги</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="manifest" href="/site.webmanifest" />
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
  <main class="services-page">
    <!-- Заголовок страницы -->
    <h1 class="page-title">Услуги</h1>
    <!-- Сетка услуг, данные получены из базы данных -->
    <div class="services-grid">
      <?php foreach($servicesList as $service): ?>
        <a href="servicesDetailed.php?id=<?php echo $service['id']; ?>" class="service-card-link">
          <div class="service-card">
            <img src="<?php echo htmlspecialchars($service['image_url']); ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" class="service-img">
            <h3 class="service-title"><?php echo htmlspecialchars($service['title']); ?></h3>
            <p class="service-desc"><?php echo nl2br(htmlspecialchars($service['description'])); ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </main>
  <footer class="footer">
    <div class="footer-container">
      <p class="footer-title">BuildSmart</p>
      <br><br>
      <p>8 (8442) 53-45-00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BuildSmart@yandex.ru</p>
    </div>
  </footer>
  <!-- Скрипты -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
