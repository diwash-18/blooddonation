DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



DROP TABLE IF EXISTS blood_requests;
CREATE TABLE blood_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    blood_type VARCHAR(5) NOT NULL,
    quantity INT NOT NULL,
    contact VARCHAR(15) NOT NULL,
    requested_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);







-- Create database
CREATE DATABASE IF NOT EXISTS blood_donation_system;

USE blood_donation_system;

-- Create the 'users' table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Create the 'donors' table
CREATE TABLE IF NOT EXISTS donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    city VARCHAR(100) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    email VARCHAR(100),
    age INT NOT NULL,
    gender ENUM('Male', 'Female', 'Other'),
    last_donation_date DATE,
    available BOOLEAN DEFAULT TRUE
);

-- Sample data for donors
INSERT INTO donors (name, blood_group, city, contact, email, age, gender, last_donation_date, available)
VALUES
('Januka Sitaula', 'A+', 'Hetauda', '9845693210', 'januka@gmail.com', 29, 'Female', '2020-08-01', TRUE),
('Aakash Sedhai', 'B+', 'Biratnagar', '98412987563', 'aakash@gmail.com', 23, 'Male', '2014-07-15', TRUE),
('Mahesh Oli', 'O-', 'Pokhara', '9847859632', 'mahesh@gmail.com', 20, 'Male', '2024-06-20', FALSE),
('Binod KC', 'AB+', 'Dhangadhi', '9842135874', 'binod@gmail.com', 37, 'Male', '2019-09-23', TRUE),
('Samjahana Bhatta', 'A-', 'Butwal', '9860235874', 'samjhana@gmail.com', 21, 'Female', '2022-06-27', FALSE);
