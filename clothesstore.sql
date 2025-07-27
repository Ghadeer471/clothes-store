
-- MySQL dump for clothesstore database

CREATE DATABASE IF NOT EXISTS clothesstore;
USE clothesstore;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample user
INSERT INTO users (username, email, password)
VALUES ('testuser', 'test@example.com', '$2y$10$EXAMPLEHASHEDPASSWORD');

-- Sample products
INSERT INTO products (name, description, price, image, category)
VALUES
('Red Dress', 'Elegant red dress for evening events.', 59.99, 'images/14.jpg', 'dress'),
('Winter Jacket', 'Warm and stylish.', 99.99, 'images/13.jpg', 'jacket'),
('Running Shoes', 'Comfortable and durable.', 79.99, 'images/3.jpg', 'shoes');
