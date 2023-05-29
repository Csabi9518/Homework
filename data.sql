-- Adatbázis létrehozása
CREATE DATABASE data CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Adatbázis kiválasztása
USE data;

-- Users tábla létrehozása
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name1 VARCHAR(255) NOT NULL UNIQUE,
    mail1 VARCHAR(255) NOT NULL,
    text1 VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);