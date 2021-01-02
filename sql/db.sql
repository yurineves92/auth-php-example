CREATE TABLE users (
    id SERIAL PRIMARY KEY NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    passwd VARCHAR(255) NOT NULL,
    facebook_id VARCHAR(30),
    google_id VARCHAR(30),
    photo VARCHAR(255),
    forget VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME
);