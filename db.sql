CREATE DATABASE sessionsOOP;

SELECT DATABASE();

CREATE TABLE
    posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT,
        body TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT NOW(),
        modified_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );

CREATE TABLE
    users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(50) NOT NULL,
        created_at TIMESTAMP DEFAULT NOW(),
        modified_at TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
    );

DROP TABLE posts;

DROP TABLE users;