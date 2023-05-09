DROP DATABASE IF EXISTS tarea1;
CREATE DATABASE tarea1;
USE tarea1;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(255),
    pass VARCHAR(255)
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(255),
    name VARCHAR(255),
    description TEXT
);

CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    action VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),

    user_id INT,
    
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO users (user, pass) VALUES ("adrian", "$2y$10$BgDupMxmSGTO0VG07YxTvO9tvuQ8R29sAVQoYaoRFR3rzv9GOXVsm");

INSERT INTO products (
    codigo, name, description
) VALUES (
    1001, "Arroz Roa", "Arroz Roa es una reconocida marca de arroz que se caracteriza por su calidad y sabor excepcionales. Es un arroz de grano medio que se cultiva en diferentes regiones de España. Su textura es suave y cremosa, lo que lo hace ideal para una amplia variedad de platos, desde paellas hasta arroces con mariscos o vegetales. Arroz Roa es sinónimo de excelencia y es ampliamente utilizado tanto por chefs profesionales como por amantes de la cocina en sus preparaciones culinarias."
), (
    1002, "Zanahoria", "Las zanahorias son vegetales de color naranja brillante que tienen forma alargada y puntiaguda. Son conocidas por ser crujientes y jugosas, con un sabor ligeramente dulce. Además de su atractivo color y textura, las zanahorias son ricas en vitamina A y fibra, lo que las convierte en una opción saludable y nutritiva para incluir en una dieta equilibrada."
);

