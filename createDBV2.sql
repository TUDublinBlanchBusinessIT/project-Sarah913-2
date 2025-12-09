CREATE DATABASE IF NOT EXISTS ocean;
USE ocean;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL

);

CREATE TABLE IF NOT EXISTS Critters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fish VARCHAR (20) NOT NULL UNIQUE
);
INSERT INTO users (username, password)
VALUES ('sarah', 'mypass');

INSERT INTO Critters (fish)
VALUES ('Salmon');


SELECT * FROM Critters;
