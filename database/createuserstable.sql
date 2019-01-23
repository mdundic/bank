-- create users table
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    balance DECIMAL NOT NULL,
    UNIQUE KEY unique_email (email),
    PRIMARY KEY (id)
);