<?php
// Файл: contacts.php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>BuildSmart</title>
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
  <main>
    <section class="contacts-section">
      <div class="contacts-left">
        <h2>Контакты</h2>
        <p class="contacts-phone">8 (8442) 33-63-00</p>
        <p class="contacts-email">BuildSmart@yandex.ru</p>
        <div class="social-icons">
          <a href="#" class="icon-link">
            <img src="photos/vk-icon.png" alt="Иконка ВКонтакте">
          </a>
          <a href="#" class="icon-link">
            <img src="photos/telegram-icon.png" alt="Иконка Телеграм">
          </a>
        </div>
      </div>
      <div class="contacts-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.308557293955!2d4.3522033157440445!3d50.84572417953186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c380e3c50d3b%3A0x682cd49ab88348f5!2sGrand%20Place!5e0!3m2!1sen!2s!4v1612799932559!5m2!1sen!2s" 
          allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer-container">
      <p class="footer-title">BuildSmart</p>
      <br><br>
      <p>8 (8442) 53-45-00 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BuildSmart@yandex.ru</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
