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
), (
    1003, "Papa", "Las papas son vegetales de forma redonda o alargada, con una piel rugosa y un interior suave y cremoso. Se caracterizan por su color marrón claro o amarillo, aunque también existen variedades de piel roja o púrpura. Las papas son versátiles y se pueden cocinar de diversas formas, como hervidas, asadas, fritas o en puré. Son una excelente fuente de carbohidratos, vitamina C y potasio, y son ampliamente utilizadas en la gastronomía de diferentes culturas alrededor del mundo."
), (
    1004, "Lechuga", "Las lechugas son vegetales de hojas verdes y crujientes que forman una cabeza compacta. Se caracterizan por su sabor suave y refrescante, y su textura delicada. Existen diferentes variedades de lechugas, como la lechuga romana, la lechuga iceberg y la lechuga de hoja suelta. Son ampliamente utilizadas en ensaladas y como base para preparar sándwiches y wraps. Las lechugas son una fuente de vitaminas A y K, así como de fibra, y son conocidas por su alto contenido de agua, lo que las hace hidratantes y saludables."
), (
    1005, "Sandia", "La sandía es una fruta refrescante y jugosa que se caracteriza por su pulpa roja y dulce, aunque también existen variedades con pulpa amarilla o rosada. Tiene una textura crujiente y está compuesta principalmente por agua, lo que la convierte en una excelente opción para hidratarse. La sandía es rica en vitaminas A y C, así como en antioxidantes. Es una fruta popular durante los meses de verano debido a su sabor dulce y refrescante, y se consume principalmente en trozos o en forma de jugo."
), (
    1006, "Fresa", "La fresa es una pequeña fruta de color rojo brillante que se caracteriza por su sabor dulce y refrescante. Tiene una textura jugosa y carnosa, y está cubierta de pequeñas semillas en su superficie. Las fresas son conocidas por su aroma distintivo y su versatilidad en la cocina. Se pueden disfrutar solas, en postres como tartas, batidos y helados, o como complemento en ensaladas y platos salados. Además de su delicioso sabor, las fresas son una excelente fuente de vitamina C, antioxidantes y fibra, lo que las convierte en una opción nutritiva y saludable."
);

