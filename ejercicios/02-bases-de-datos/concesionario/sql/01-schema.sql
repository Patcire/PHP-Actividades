CREATE TABLE coches (
                     id   INT AUTO_INCREMENT PRIMARY KEY,
                     marca VARCHAR(50),
                     model VARCHAR(50),
                     PRIMARY KEY (marca, model)
);
