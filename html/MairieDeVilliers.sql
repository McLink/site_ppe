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

CREATE TABLE IF NOT EXISTS INSCRIRE_CENTRE_DE_LOISIRS
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


CREATE  INDEX I_FK_INSCRIRE_CENTRE_DE_LOISIRS_CENTRE_DE_LOISIRS
     ON INSCRIRE_CENTRE_DE_LOISIRS (IDINSCRIT ASC);

CREATE  INDEX I_FK_IINSCRIRE_CENTRE_DE_LOISIRS_ENFANTS
     ON INSCRIRE_CENTRE_DE_LOISIRS (IDENF ASC);


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


ALTER TABLE INSCRIRE_CENTRE_DE_LOISIRS 
  ADD FOREIGN KEY FK_INSCRIRE_CENTRE_DE_LOISIRS_CENTRE_DE_LOISIRS (IDINSCRIT)
      REFERENCES CENTRE_DE_LOISIRS (IDINSCRIT) ;


ALTER TABLE INSCRIRE_CENTRE_DE_LOISIRS 
  ADD FOREIGN KEY FK_INSCRIRE_CENTRE_DE_LOISIRS_ENFANTS (IDENF)
      REFERENCES ENFANTS (IDENF) ;



# -----------------------------------------------------------------------------
#       Insertion de données table PERSONNE
# -----------------------------------------------------------------------------

INSERT INTO personne (`IDPERSONNE`, `SEXE`, `NOM`, `PRENOM`, `DATENAISS`, `ADRESSE`, `CP`, `Ville`, `TEL`, `EMAIL`, `Login`, `Mot_de_Passe`) 
VALUES (NULL, 'monsieur', 'vilcoque', 'quentin', '2016-05-04', '23 rue paul', '92700', 'villiers', '0638645823', 'q.vil@gmail.com', 'lolo', SHA1('1234'));

INSERT INTO personne (`IDPERSONNE`, `SEXE`, `NOM`, `PRENOM`, `DATENAISS`, `ADRESSE`, `CP`, `Ville`, `TEL`, `EMAIL`, `Login`, `Mot_de_Passe`) 
VALUES (NULL, 'madame', 'keys', 'alice', '2016-05-04', '23 rue lab', '92700', 'villiers', '0638647828', 'alice.keys@gmail.com', 'alice12', SHA1('123456'));

INSERT INTO personne (`IDPERSONNE`, `SEXE`, `NOM`, `PRENOM`, `DATENAISS`, `ADRESSE`, `CP`, `Ville`, `TEL`, `EMAIL`, `Login`, `Mot_de_Passe`) 
VALUES (NULL, 'monsieur', 'beulai', 'maurice', '1889-05-04', '17 avenu foche', '92700', 'villiers', '0638998822', 'maurice.beulai@gmail.com', 'maurice32', SHA1('123mb'));

INSERT INTO personne (`IDPERSONNE`, `SEXE`, `NOM`, `PRENOM`, `DATENAISS`, `ADRESSE`, `CP`, `Ville`, `TEL`, `EMAIL`, `Login`, `Mot_de_Passe`) 
VALUES (NULL, 'madame', 'caste', 'veronique', '1889-07-22', '1 rue hoche', '92700', 'villiers', '0638647828', 'vero.caste@gmail.com', 'vero15', SHA1('123456vero'));


# -----------------------------------------------------------------------------
#       Insertion de données table enfant
# -----------------------------------------------------------------------------

INSERT INTO enfants (`IDENF`, `IDPERSONNE`, `NOM`, `PRENOM`, `DATEN`, `SEXE`) 
VALUES (NULL, '1', 'vilcoque', 'jul', '2016-05-04', 'monsieur');

INSERT INTO enfants (`IDENF`, `IDPERSONNE`, `NOM`, `PRENOM`, `DATEN`, `SEXE`) 
VALUES (NULL, '2', 'keys', 'jean', '2000-05-04', 'monsieur');

INSERT INTO enfants (`IDENF`, `IDPERSONNE`, `NOM`, `PRENOM`, `DATEN`, `SEXE`) 
VALUES (NULL, '3', 'beaulai', 'jane', '2001-02-20', 'madame');

INSERT INTO enfants (`IDENF`, `IDPERSONNE`, `NOM`, `PRENOM`, `DATEN`, `SEXE`) 
VALUES (NULL, '4', 'caste', 'herve', '2015-02-20', 'monsieur');



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
#       Insertion de données table centre_de_loisirs
# -----------------------------------------------------------------------------

INSERT INTO centre_de_loisirs (`IDINSCRIT`, `CENTRE`, `CAPACITE`, `DATEDEB`, `DATEFIN`) 
VALUES (NULL, 'Au soleil', '40', '2016-05-01', '2016-07-01');

INSERT INTO centre_de_loisirs (`IDINSCRIT`, `CENTRE`, `CAPACITE`, `DATEDEB`, `DATEFIN`) 
VALUES (NULL, 'LE VILLAGE', '60', '2016-04-01', '2016-07-01');


# -----------------------------------------------------------------------------
#       Insertion de données table inscrire2 (centre_de_loisirs)
# -----------------------------------------------------------------------------

INSERT INTO INSCRIRE_CENTRE_DE_LOISIRS(`IDINSCRIT`, `IDENF`, `DATEINSCRIPTION`, `DATEFINABONNEMENT`, `TARIF`) 
VALUES ('1', '3', '2016-05-03', '2016-05-21', '30 euros');

# -----------------------------------------------------------------------------
#       conversion en utf8
# -----------------------------------------------------------------------------
ALTER DATABASE MairieDeVilliers charset=utf8;
