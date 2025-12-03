CREATE DATABASE gym_logger;
CREATE TABLE IF NOT EXISTS workouts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    workout_date DATE NOT NULL,
    workout_type VARCHAR(50) NOT NULL,
    duration_minutes INT NOT NULL,
    calories_burned INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert sample workouts
INSERT INTO workouts (user_id, workout_date, workout_type, duration_minutes, calories_burned) VALUES
(1, '2025-12-01', 'Running', 30, 300),
(2, '2025-12-01', 'Cycling', 45, 400),
(1, '2025-12-02', 'Weight Training', 60, 500),
(3, '2025-12-02', 'Swimming', 30, 250)