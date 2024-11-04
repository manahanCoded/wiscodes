CREATE DATABASE loginUser_db;
USE loginUser_db;

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('juan_delacruz', 'password123');
INSERT INTO users (username, password) VALUES ('maria_clara', 'password123');
INSERT INTO users (username, password) VALUES ('pedro_penduko', 'password123');
INSERT INTO users (username, password) VALUES ('ana_santos', 'password123');
INSERT INTO users (username, password) VALUES ('jose_rizal', 'password123');
INSERT INTO users (username, password) VALUES ('andres_bonifacio', 'password123');
INSERT INTO users (username, password) VALUES ('emilio_aguinaldo', 'password123');
INSERT INTO users (username, password) VALUES ('luz_delacruz', 'password123');
INSERT INTO users (username, password) VALUES ('dante_rivera', 'password123');
INSERT INTO users (username, password) VALUES ('carlos_magtanggol', 'password123');
INSERT INTO users (username, password) VALUES ('flor_caballero', 'password123');
INSERT INTO users (username, password) VALUES ('victor_luna', 'password123');
INSERT INTO users (username, password) VALUES ('nina_gabriela', 'password123');