<?php
// Файл: index.php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>BuildSmart</title>
  <!-- Подключение CSS -->
  <link rel="stylesheet" href="index.css">
  <!-- Подключение шрифта Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="manifest" href="/site.webmanifest" />
</head>
<body>
  <!-- Шапка (header) -->
  <header class="header">
    <div class="header-container">
      <!-- Логотип -->
      <div class="logo-block">
        <img src="photos/logo.png" alt="Логотип BuildSmart" class="logo">
      </div>
      <!-- Навигация -->
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
  <!-- Основной контент -->
  <main>
    <!-- Блок с описанием (Hero) -->
    <section class="intro">
      <div class="intro-text">
        <h1>BuildSmart</h1>
        <p>
          Сайт выполнит покраску, обработку, перестановку, инструментальную спецификацию 
          несколько абзацев. Сайт выполнит покраску, обработку, перестановку, инструментальную 
          спецификацию несколько абзацев. Сайт выполнит покраску, обработку, перестановку, 
          инструментальную спецификацию несколько абзацев.
        </p>
      </div>
    </section>
    <!-- Услуги -->
    <section class="services">
      <div class="services-head">
        <h2>Услуги</h2>
        <div class="backcc">
          <a href="services.php" class="view-all">Смотреть все</a>
        </div>
      </div>
      <div class="services-wrapper">
        <!-- Пример статичных карточек -->
        <div class="service-card">
          <img src="photos/rem.jpg" alt="Ремонт дома" class="service-image">
          <h3>Ремонт дома</h3>
          <p>Сайт выполнит покраску, обработку, перестановку...</p>
        </div>
        <div class="service-card">
          <img src="photos/rem.jpg" alt="Отделка комнаты" class="service-image">
          <h3>Отделка комнаты</h3>
          <p>Сайт выполнит покраску, обработку, перестановку...</p>
        </div>
      </div>
    </section>
    <!-- История и преимущества -->
    <section class="history">
      <h2>История и преимущества</h2>
      <p>
        Сайт выполнит покраску, обработку, перестановку, инструментальную спецификацию несколько абзацев. 
        Сайт выполнит покраску, обработку, перестановку, инструментальную спецификацию несколько абзацев. 
        Сайт выполнит покраску, обработку, перестановку, инструментальную спецификацию несколько абзацев. 
        Сайт выполнит покраску, обработку, перестановку, инструментальную спецификацию несколько абзацев.
      </p>
    </section>
  </main>
  <!-- Подвал (footer) -->
  <footer class="footer">
    <div class="footer-container">
      <p class="footer-title">BuildSmart</p>
      <br><br>
      <p>8 (8442) 53-45-00 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BuildSmart@yandex.ru</p>
    </div>
  </footer>
  <!-- Скрипты -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
