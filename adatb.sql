-- Adatbázis létrehozása
CREATE DATABASE adatb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Adatbázis kiválasztása
USE adatb;

-- Users tábla létrehozása
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);