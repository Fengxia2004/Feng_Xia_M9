CREATE USER 'feng'@'localhost' INDETIFIED BY 'feng';

CREATE DATABASE feng_xia_iticdesk
    
GRANT ALL PRIVILEGIES ON feng_xia_iticdesk.* TO 'feng'@'localhost';
FLUSH PRIVILEGES;
    
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

INSERT INTO usuaris (id, dni, nom, cognom, correu, contrasenya, rol) 
VALUES (1, 'x9916862k', 'feng', 'xia', '2023_feng.xia@iticbcn.cat', 'xf5433998577', 'administrador');

