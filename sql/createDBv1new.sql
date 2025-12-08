USE gym_logger;

CREATE TABLE workouts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(100),
    exercise VARCHAR(255),
    sets INT,
    reps INT,
    weight INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO workouts (type, exercise, sets, reps, weight) VALUES
('Strength', 'Bench Press', 4, 8, 60),
('Hypertrophy', 'Lat Pulldown', 3, 12, 45),
('Strength', 'Deadlift', 5, 5, 100);