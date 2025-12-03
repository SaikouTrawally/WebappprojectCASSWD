CREATE DATABASE gym_logger;
USE gym_logger;

CREATE TABLE entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    exercise VARCHAR(255),
    weight INT,
    reps INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);