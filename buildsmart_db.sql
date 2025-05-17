-- Файл: database.sql
CREATE DATABASE IF NOT EXISTS buildsmart_db CHARACTER SET utf8 COLLATE utf8_general_ci;
USE buildsmart_db;

-- Таблица для хранения данных об услугах
CREATE TABLE IF NOT EXISTS services (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image_url VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Таблица для хранения заявок (формы обратной связи)
CREATE TABLE IF NOT EXISTS requests (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  question TEXT NOT NULL,
  phone VARCHAR(50) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
