CREATE SCHEMA Biblioteca;

SET foreign_key_checks = 0;

CREATE TABLE LIBRO(
    ISBN        CHAR(11)        NOT NULL,
    TITOLO      VARCHAR(50)     NOT NULL,   //come attributo unique
    ANNO_PUBBL  DATE,
    COD_ED      INT,
    
    PRIMARY KEY(ISBN),
    UNIQUE(TITOLO),
    FOREIGN KEY(COD_ED) REFERENCES EDITORE(CODICE)
        ON UPDATE CASCADE   ON DELETE SET DEFAULT //da mettere in default
);

CREATE TABLE EDITORE(
    CODICE      INT             NOT NULL,
    TELEFONO    VARCHAR(12),
    NOME_ED     VARCHAR(20)     NOT NULL,
    VIA         VARCHAR(30),
    CIVICO      VARCHAR(4),
    CAP         CHAR(5),
    CITTA       VARCHAR(10),
    PRIMARY KEY(CODICE),
    UNIQUE(NOME)
);

//per la creazione di autore viene messo come chiave primaria
//un id unico dato all inserimento nel database(cosi da rispettare anche 
//la seconda formanormale e non avere problemi di dipendenze funzionali

CREATE TABLE AUTORE(
    ID_AUT          INT         NOT NULL,
    NOME_A          VARCHAR(15) NOT NULL,        
    COGNOME_A       VARCHAR(15) NOT NULL, 
    DATANASCITA     DATE,
    LUOGO_NASCITA   VARCHAR(20),        //presumendo 
    //che per luogo si intenda solo la citta
    
    PRIMARY KEY(ID_AUT),
);

//poiche nella carta dello studente la matricola è del
//tipo 0000144195
CREATE TABLE STUDENTE(
    MATRICOLA   CHAR(10)        NOT NULL,
    NOME        VARCHAR(15)     NOT NULL,
    COGNOME     VARCHAR(15)     NOT NULL,
    #TELEFONO   VARCHAR(12)     NOT NULL,
    VIA         VARCHAR(30),
    CIVICO      VARCHAR(4),
    CAP         CHAR(5),
    CITTA       VARCHAR(10),
    PRIMARY KEY(MATRICOLA),
);


SET foreign_key_checks = 1;

