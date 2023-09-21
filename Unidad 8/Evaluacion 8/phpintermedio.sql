CREATE TABLE consultas (
    id_consulta INT(5) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    consulta TEXT NOT NULL
);
