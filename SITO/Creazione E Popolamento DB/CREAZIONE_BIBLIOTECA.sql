CREATE SCHEMA IF NOT EXISTS Biblioteca;
USE Biblioteca;

CREATE TABLE EDITORE(
    CODICE      INT             NOT NULL,
	NOME_ED     VARCHAR(20)     NOT NULL,
    TELEFONO    VARCHAR(15),
    VIA         VARCHAR(30),
    CIVICO      VARCHAR(4),
    CAP         VARCHAR(5),
    CITTA       VARCHAR(10),
    PRIMARY KEY(CODICE),
    UNIQUE(NOME_ED)
);


CREATE TABLE LINGUA(
    NOME_LINGUA     VARCHAR(30)     NOT NULL,
    PRIMARY KEY(NOME_LINGUA)
);

#Poichè per un libro in lingua diversa cambia l'isbn alora lingua è chiave estena

CREATE TABLE LIBRO(
    ISBN        CHAR(11)        NOT NULL,
    TITOLO      VARCHAR(100)     NOT NULL,   #come attributo unique
    ANNO_PUBBL  INT,
    COD_ED      INT             NOT NULL,
    NOME_LINGUA      VARCHAR(30)     NOT NULL,

    PRIMARY KEY(ISBN),
    UNIQUE(TITOLO),
    FOREIGN KEY(COD_ED) REFERENCES EDITORE(CODICE)
        ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(NOME_LINGUA) REFERENCES LINGUA(NOME_LINGUA)
        ON DELETE RESTRICT ON UPDATE CASCADE
);
#per la creazione di autore viene messo come chiave primaria
#un id unico dato all inserimento nel database(cosi da rispettare anche
#la seconda formanormale e non avere problemi di dipendenze funzionali

CREATE TABLE AUTORE(
    ID_AUT          INT         NOT NULL,
    NOME_A          VARCHAR(30) NOT NULL,
    COGNOME_A       VARCHAR(30) NOT NULL,
    DATANASCITA     DATE,
    LUOGO_NASCITA   VARCHAR(30),        #presumendo
    #che per luogo si intenda solo la citta

    PRIMARY KEY(ID_AUT)
);


#poiche nella carta dello studente la matricola è del
#tipo 0000144195
CREATE TABLE STUDENTE(
    MATRICOLA   CHAR(10)        					NOT NULL,
    NOME        VARCHAR(30)     						NOT NULL,
    COGNOME     VARCHAR(30)     					NOT NULL,
    NUMERO_TELEFONO   VARCHAR(15)			NOT NULL,  #PER CONTATTARE LO STUDENTE
    VIA         VARCHAR(30),
    CIVICO      VARCHAR(4),
    CAP         CHAR(5),
    CITTA       VARCHAR(10),
    PRIMARY KEY(MATRICOLA)
);

CREATE TABLE DIPARTIMENTO(
    NOME_DIP    VARCHAR(50)        NOT NULL,
    VIA         VARCHAR(30),
    CIVICO      VARCHAR(4),
    CAP         CHAR(5),
    CITTA       VARCHAR(10),
    PRIMARY KEY (NOME_DIP)
);

#AMMETTENDO CHE SE UN LIBRO VIENE TOLTO DAL
#DATABASE è PERCHE SONO STATE ROTTE TUTTE LE SUE COPIE
#E NON è PIU DISPONIBILE


CREATE TABLE COPIA(
    NUMERO_COPIA      INT       NOT NULL,
    ISBN        CHAR(11)        NOT NULL,
    NOME_DIP    VARCHAR(50),
    PRIMARY KEY(NUMERO_COPIA, ISBN),
    FOREIGN KEY(ISBN) REFERENCES LIBRO(ISBN)
			ON DELETE RESTRICT ON UPDATE CASCADE, 
      FOREIGN KEY(NOME_DIP) REFERENCES DIPARTIMENTO(NOME_DIP)
        ON UPDATE CASCADE ON DELETE SET NULL
);

#SE LA MATRICOLA VENISSE AGGIORNATA DALL'UNIVERSITà ALORA SI AGGIORNEREBE ANCHE NEL PRESTITO
CREATE TABLE PRESTITO(
    ISBN            CHAR(11)        	 NOT NULL,
    NUMERO_COPIA    INT           NOT NULL,
    MATRICOLA       CHAR(10)     NOT NULL,
    DATA_USCITA     DATE           NOT NULL,
	N_PROROGHE     INT           	NOT NULL,

    PRIMARY KEY(MATRICOLA, ISBN,NUMERO_COPIA),
    FOREIGN KEY(ISBN) REFERENCES LIBRO(ISBN)
        ON DELETE RESTRICT ON UPDATE CASCADE, #NEL MOMENTO IN CUI C'è ASSOCIATO UN PRESTITO NON
																			#SI PUO ELIMINARE DAL DB IL LIBRO
    FOREIGN KEY(MATRICOLA) REFERENCES STUDENTE(MATRICOLA)
        ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(NUMERO_COPIA) REFERENCES COPIA(NUMERO_COPIA)
        ON UPDATE CASCADE ON DELETE RESTRICT
);

#AMMAETTENDO CHE NON CI SIANO PIU LIBRI NEL DATABASE SCRITTI
#DA QUELL'AUTORE E L'AUTORE VENGA ELIMINATO ALLORA SI ELIMINERA
#ANCHE DA QUI

CREATE TABLE SCRIVE(
    ISBN            CHAR(11)        NOT NULL,
    ID_AUT          INT             NOT NULL,
    PRIMARY KEY(ISBN,ID_AUT),
    FOREIGN KEY(ISBN) REFERENCES LIBRO(ISBN)
        ON DELETE CASCADE ON UPDATE CASCADE,#AMMETTENDO CHE SE VIENE ELIMINATO UN LIBRO NON SERVE MANTENERE L'IFORMAZIONE
        #CHI L'HA SCRITTO
    FOREIGN KEY(ID_AUT) REFERENCES AUTORE(ID_AUT)
        ON DELETE RESTRICT ON UPDATE CASCADE
);