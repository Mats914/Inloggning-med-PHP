-- Skapa databas
CREATE DATABASE IF NOT EXISTS users_db;
USE users_db;

-- Skapa tabell
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    password VARCHAR(64) NOT NULL
);

-- Lägg till en användare (lösenordet: 123456)
INSERT INTO users (name, password) VALUES
('admin', '$2y$10$uO4UL.8Mto9zmKf6d2DTUuQmO68hSFMjxfBQ2peADrgLZTuT4zZ1e');
