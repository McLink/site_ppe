DROP DATABASE IF EXISTS MairieDeVilliers;

CREATE DATABASE IF NOT EXISTS MairieDeVilliers;
USE MairieDeVilliers;
# -----------------------------------------------------------------------------
#       TABLE : PERSONNE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERSONNE
 (
   IDPERSONNE int not null auto_increment ,
   SEXE VARCHAR(10) NULL  ,
   NOM VARCHAR(35) NULL  ,
   PRENOM VARCHAR(35) NULL  ,
   DATENAISS DATE NULL  ,
   ADRESSE VARCHAR(60) NULL  ,
   CP VARCHAR(10) NULL  ,
   Ville varchar(30),
   TEL VARCHAR(10) NULL  ,
   EMAIL VARCHAR(50) NULL ,
   Login varchar(25),
   Mot_de_Passe varchar(50) , 
   PRIMARY KEY (IDPERSONNE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CANTINE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CANTINE
 (
   IDINSCRIT int not null auto_increment  ,
   ETABLISSEMENT CHAR(32) NULL  ,
   CAPACITE CHAR(32) NULL  ,
   NBENFANTTOTAL INTEGER NULL  ,
   DATEDEB date NULL  ,
   DATEFIN date NULL  , 
   PRIMARY KEY (IDINSCRIT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CENTRE_DE_LOISIRS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CENTRE_DE_LOISIRS
 (
   IDINSCRIT int not null auto_increment  ,
   CENTRE VARCHAR(32) NULL  ,
   CAPACITE CHAR(32) NULL,
   DATEDEB date NULL  ,
   DATEFIN date NULL    
   , PRIMARY KEY (IDINSCRIT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FORMULAIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FORMULAIRE
 (
   IDFORM int not null auto_increment  ,
   IDPERSONNE int NOT NULL  ,
   ADRESSEMAIL CHAR(32) NULL  ,
   MOTIF VARCHAR(200) NULL  
   , PRIMARY KEY (IDFORM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FORMULAIRE
# -----------------------------------------------------------------------------


CREATE UNIQUE INDEX I_FK_FORMULAIRE_PERSONNE
     ON FORMULAIRE (IDPERSONNE ASC);

# -----------------------------------------------------------------------------
#       TABLE : ENFANTS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENFANTS
 (
   IDENF int not null auto_increment  ,
   IDPERSONNE int NOT NULL  ,
   NOM VARCHAR(40) NULL  ,
   PRENOM VARCHAR(40) NULL  ,
   DATEN DATE NULL  ,
   SEXE VARCHAR(10) NULL  
   , PRIMARY KEY (IDENF) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ENFANTS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ENFANTS_PERSONNE
     ON ENFANTS (IDPERSONNE ASC);

# -----------------------------------------------------------------------------
#       TABLE : INSCRIRE_CANTINE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSCRIRE_CANTINE
 (
   IDINSCRIT int not null,
   IDENF int NOT NULL  , 
   DATEINSCRIPTION date NULL  ,
   NBENFANT CHAR(32) NULL  
   , PRIMARY KEY (IDINSCRIT,IDENF) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INSCRIRE_CANTINE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INSCRIRE_CANTINE_CANTINE
     ON INSCRIRE_CANTINE (IDINSCRIT ASC);

CREATE  INDEX I_FK_INSCRIRE_CANTINE_ENFANTS
     ON INSCRIRE_CANTINE (IDENF ASC);

# -----------------------------------------------------------------------------
#       TABLE : INSCRIRE2 (Centre de loisirs)
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSCRIRE2
 (
   IDINSCRIT int NOT NULL  ,
   IDENF int NOT NULL  ,
   DATEINSCRIPTION date NULL  ,
   DATEFINABONNEMENT date NULL  ,
   TARIF CHAR(32) NULL  
   , PRIMARY KEY (IDINSCRIT,IDENF) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INSCRIRE2
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INSCRIRE2_CENTRE_DE_LOISIRS
     ON INSCRIRE2 (IDINSCRIT ASC);

CREATE  INDEX I_FK_INSCRIRE2_ENFANTS
     ON INSCRIRE2 (IDENF ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE FORMULAIRE 
  ADD FOREIGN KEY FK_FORMULAIRE_PERSONNE (IDPERSONNE)
      REFERENCES PERSONNE (IDPERSONNE) ;


ALTER TABLE ENFANTS 
  ADD FOREIGN KEY FK_ENFANTS_PERSONNE (IDPERSONNE)
      REFERENCES PERSONNE (IDPERSONNE) ;


ALTER TABLE INSCRIRE_CANTINE 
  ADD FOREIGN KEY FK_INSCRIRE_CANTINE_CANTINE (IDINSCRIT)
      REFERENCES CANTINE (IDINSCRIT) ;


ALTER TABLE INSCRIRE_CANTINE 
  ADD FOREIGN KEY FK_INSCRIRE_CANTINE_ENFANTS (IDENF)
      REFERENCES ENFANTS (IDENF) ;


ALTER TABLE INSCRIRE2 
  ADD FOREIGN KEY FK_INSCRIRE2_CENTRE_DE_LOISIRS (IDINSCRIT)
      REFERENCES CENTRE_DE_LOISIRS (IDINSCRIT) ;


ALTER TABLE INSCRIRE2 
  ADD FOREIGN KEY FK_INSCRIRE2_ENFANTS (IDENF)
      REFERENCES ENFANTS (IDENF) ;



# -----------------------------------------------------------------------------
#       Insertion de données table PERSONNE
# -----------------------------------------------------------------------------

INSERT INTO personne (`IDPERSONNE`, `SEXE`, `NOM`, `PRENOM`, `DATENAISS`, `ADRESSE`, `CP`, `Ville`, `TEL`, `EMAIL`, `Login`, `Mot_de_Passe`) 
VALUES (NULL, 'monsieur', 'vilcoque', 'quentin', '2016-05-04', '23 rue paul', '75017', 'paris', '0638645823', 'q.vil@gmail.com', 'lolo', SHA1('1234'));

INSERT INTO personne (`IDPERSONNE`, `SEXE`, `NOM`, `PRENOM`, `DATENAISS`, `ADRESSE`, `CP`, `Ville`, `TEL`, `EMAIL`, `Login`, `Mot_de_Passe`) 
VALUES (NULL, 'madame', 'keys', 'alice', '2016-05-04', '23 rue lab', '92700', 'colombes', '0638647828', 'alice.keys@gmail.com', 'alice12', SHA1('123456'));


# -----------------------------------------------------------------------------
#       Insertion de données table enfant
# -----------------------------------------------------------------------------

INSERT INTO enfants (`IDENF`, `IDPERSONNE`, `NOM`, `PRENOM`, `DATEN`, `SEXE`) 
VALUES (NULL, '1', 'vilcoque', 'jul', '2016-05-04', 'monsieur');

INSERT INTO enfants (`IDENF`, `IDPERSONNE`, `NOM`, `PRENOM`, `DATEN`, `SEXE`) 
VALUES (NULL, '2', 'keys', 'jean', '2000-05-04', 'monsieur');

# -----------------------------------------------------------------------------
#       Insertion de données table cantine
# -----------------------------------------------------------------------------

INSERT INTO cantine (`IDINSCRIT`, `ETABLISSEMENT`, `CAPACITE`, `NBENFANTTOTAL`, `DATEDEB`, `DATEFIN`) VALUES 
(NULL, 'jule verne', '200', '100', '2016-05-01', '2016-06-30');

INSERT INTO cantine (`IDINSCRIT`, `ETABLISSEMENT`, `CAPACITE`, `NBENFANTTOTAL`, `DATEDEB`, `DATEFIN`) VALUES 
(NULL, 'Malraux', '200', '40', '2016-03-01', '2017-04-30');

# -----------------------------------------------------------------------------
#       Insertion de données table inscrire cantine
# -----------------------------------------------------------------------------

INSERT INTO inscrire_cantine (`IDINSCRIT`, `IDENF`, `DATEINSCRIPTION`, `NBENFANT`) 
VALUES ('1', '1', '2016-05-04', '1');






# -----------------------------------------------------------------------------
#       conversion en utf8
# -----------------------------------------------------------------------------
ALTER DATABASE MairieDeVilliers charset=utf8;