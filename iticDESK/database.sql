CREATE DATABASE IF NOT EXISTS feng_xia_iticdesk;

USE feng_xia_iticdesk;

CREATE TABLE usuaris (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(9) NOT NULL UNIQUE,
    nom VARCHAR(100) NOT NULL,
    cognom VARCHAR(100) NOT NULL,
    correu VARCHAR(100) NOT NULL UNIQUE,
    contrasenya VARCHAR(255) NOT NULL,
    rol ENUM('professor', 'administrador') NOT NULL
);

CREATE TABLE incidencies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    num_referencia VARCHAR(20) NOT NULL UNIQUE,
    prioritat ENUM('Tipus I', 'Tipus II', 'Tipus III', 'Tipus IV') NOT NULL,
    titol VARCHAR(255) NOT NULL,
    descripcio TEXT NOT NULL,
    id_usuari INT NOT NULL,
    data_registre TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estat ENUM('Oberta', 'Gestió', 'Tancada', 'Reoberta') DEFAULT 'Oberta',
    FOREIGN KEY (id_usuari) REFERENCES usuaris(id)
);
