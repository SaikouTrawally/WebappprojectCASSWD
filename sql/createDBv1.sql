CREATE DATABASE gym_logger;

USE gym_logger;

CREATE TABLE workouts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50),
    exercise VARCHAR(100),
    sets INT,
    reps INT,
    weight INT,
    date_logged TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
