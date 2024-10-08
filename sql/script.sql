CREATE DATABASE si;

\c si;

CREATE TABLE departements(
    id SERIAL PRIMARY KEY,
    nom_departement VARCHAR(250) NOT NULL
);

CREATE TABLE users(
    id SERIAL PRIMARY KEY, 
    email_user VARCHAR(100) UNIQUE NOT NULL,
    password_user VARCHAR(100) NOT NULL,
    id_departement INTEGER NOT NULL
);
ALTER TABLE users ADD CONSTRAINT fk_user_departement FOREIGN KEY(id_departement) REFERENCES departements(id);


