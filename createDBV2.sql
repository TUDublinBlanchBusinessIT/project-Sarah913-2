CREATE DATABASE IF NOT EXISTS ocean;
USE ocean;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL

);

CREATE TABLE IF NOT EXISTS MyTable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL UNIQUE,
    lastname VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE
);
INSERT INTO users (username, password)
VALUES ('sarah', 'mypass');

INSERT INTO MyTable (firstname, lastname, email)
VALUES ('Sarah', 'Smith', 'sarah@example.com');


SELECT * FROM MyTable;
