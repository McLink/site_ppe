DROP Database MairieDeVilliers;
CREATE Database MairieDeVilliers;
use MairieDeVilliers;
# -----------------------------------------------------------------------------
#       TABLE : PERSONNE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERSONNE
 (
   IDCLIENT int not null auto_increment ,
   CODECAT CHAR(32) NOT NULL  ,
   SEXE VARCHAR(15) NULL  ,
   NOM VARCHAR(35) NULL  ,
   PRENOM VARCHAR(35) NULL  ,
   DATENAISS DATE NULL  ,
   ADRESSE VARCHAR(60) NULL  ,
   CP VARCHAR(6) NULL  ,
   TEL VARCHAR(10) NULL  ,
   EMAIL VARCHAR(50) NULL  
   , PRIMARY KEY (IDCLIENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PERSONNE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PERSONNE_CATEGORIEPRO
     ON PERSONNE (CODECAT ASC);

# -----------------------------------------------------------------------------
#       TABLE : CANTINE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CANTINE
 (
   IDINSCRIT char(4) NOT NULL  ,
   CODEPERIODE CHAR(32) NOT NULL  ,
   ETABLISSEMENT VARCHAR(32) NULL  ,
   DATEINSCRIPTION date NULL  ,
   CAPACITE CHAR(32) NULL  ,
   NBENFANT INTEGER NULL  
   , PRIMARY KEY (IDINSCRIT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CANTINE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CANTINE_PERIODE_CANTINE
     ON CANTINE (CODEPERIODE ASC);

# -----------------------------------------------------------------------------
#       TABLE : CENTRE_DE_LOISIRS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CENTRE_DE_LOISIRS
 (
   IDINSCRIT CHAR(32) NOT NULL  ,
   ECOLE CHAR(32) NULL  ,
   DATEINSCRIPTIONS DATE NULL  ,
   REGION CHAR(32) NULL  ,
   CAPACITE CHAR(32) NULL  
   , PRIMARY KEY (IDINSCRIT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PERIODE_CANTINE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERIODE_CANTINE
 (
   CODEPERIODE CHAR(32) NOT NULL  ,
   DATEDEBUT date NULL  ,
   DATEFIN date NULL  ,
   TARIF CHAR(32) NULL  
   , PRIMARY KEY (CODEPERIODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FORMULAIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FORMULAIRE
 (
   IDFORM CHAR(32) NOT NULL  ,
   IDEMPLOYE CHAR(6) NOT NULL  ,
   IDCLIENT int NOT NULL  ,
   CATEGORIE CHAR(32) NULL  ,
   ADRESSERESIDENCE VARCHAR(32) NULL  ,
   MOTIF CHAR(32) NULL  
   , PRIMARY KEY (IDFORM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FORMULAIRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_FORMULAIRE_EMPLOYE
     ON FORMULAIRE (IDEMPLOYE ASC);

CREATE UNIQUE INDEX I_FK_FORMULAIRE_PERSONNE
     ON FORMULAIRE (IDCLIENT ASC);

# -----------------------------------------------------------------------------
#       TABLE : CATEGORIEPRO
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CATEGORIEPRO
 (
   CODECAT CHAR(32) NOT NULL  ,
   LIBELLECAT varchar(32) NULL  
   , PRIMARY KEY (CODECAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : EMPLOYE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EMPLOYE
 (
   IDEMPLOYE CHAR(6) NOT NULL  ,
   CIVILITE VARCHAR(4) NULL  ,
   NOM VARCHAR(35) NULL  ,
   PRENOM VARCHAR(35) NULL  ,
   DATENAISS DATE NULL  ,
   ADRESSE VARCHAR(60) NULL  ,
   CP VARCHAR(6) NULL  ,
   TEL VARCHAR(10) NULL  ,
   EMAIL VARCHAR(50) NULL  
   , PRIMARY KEY (IDEMPLOYE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ENFANTS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENFANTS
 (
   IDENF VARCHAR(4) NOT NULL  ,
   IDCLIENT int NOT NULL  ,
   IDINSCRIT VARCHAR(4) NOT NULL  ,
   IDCLIENT_1 CHAR(6) NOT NULL  ,
   IDEMPLOYE CHAR(6) NOT NULL  ,
   NOM VARCHAR(40) NULL  ,
   PRENOM VARCHAR(40) NULL  ,
   DATEN DATE NULL  ,
   SEXE VARCHAR(1) NULL  
   , PRIMARY KEY (IDENF) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ENFANTS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ENFANTS_PERSONNE
     ON ENFANTS (IDCLIENT ASC);

CREATE  INDEX I_FK_ENFANTS_CANTINE
     ON ENFANTS (IDINSCRIT ASC);

CREATE  INDEX I_FK_ENFANTS_PERSONNE_2
     ON ENFANTS (IDCLIENT_1 ASC);

CREATE  INDEX I_FK_ENFANTS_EMPLOYE
     ON ENFANTS (IDEMPLOYE ASC);

# -----------------------------------------------------------------------------
#       TABLE : INSCRIRE2
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSCRIRE2
 (
   IDINSCRIT CHAR(32) NOT NULL  ,
   IDCLIENT int NOT NULL  ,
   DATEINSCRIPTION date NULL  ,
   DATEFINABONNEMENT date NULL  ,
   TARIF CHAR(32) NULL  
   , PRIMARY KEY (IDINSCRIT,IDCLIENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INSCRIRE2
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INSCRIRE2_CENTRE_DE_LOISIRS
     ON INSCRIRE2 (IDINSCRIT ASC);

CREATE  INDEX I_FK_INSCRIRE2_PERSONNE
     ON INSCRIRE2 (IDCLIENT ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE PERSONNE 
  ADD FOREIGN KEY FK_PERSONNE_CATEGORIEPRO (CODECAT)
      REFERENCES CATEGORIEPRO (CODECAT) ;


ALTER TABLE CANTINE 
  ADD FOREIGN KEY FK_CANTINE_PERIODE_CANTINE (CODEPERIODE)
      REFERENCES PERIODE_CANTINE (CODEPERIODE) ;


ALTER TABLE FORMULAIRE 
  ADD FOREIGN KEY FK_FORMULAIRE_EMPLOYE (IDEMPLOYE)
      REFERENCES EMPLOYE (IDEMPLOYE) ;


ALTER TABLE FORMULAIRE 
  ADD FOREIGN KEY FK_FORMULAIRE_PERSONNE (IDCLIENT)
      REFERENCES PERSONNE (IDCLIENT) ;


ALTER TABLE ENFANTS 
  ADD FOREIGN KEY FK_ENFANTS_PERSONNE (IDCLIENT)
      REFERENCES PERSONNE (IDCLIENT) ;


ALTER TABLE ENFANTS 
  ADD FOREIGN KEY FK_ENFANTS_CANTINE (IDINSCRIT)
      REFERENCES CANTINE (IDINSCRIT) ;


ALTER TABLE ENFANTS 
  ADD FOREIGN KEY FK_ENFANTS_PERSONNE_2 (IDCLIENT_1)
      REFERENCES PERSONNE (IDCLIENT) ;


ALTER TABLE ENFANTS 
  ADD FOREIGN KEY FK_ENFANTS_EMPLOYE (IDEMPLOYE)
      REFERENCES EMPLOYE (IDEMPLOYE) ;


ALTER TABLE INSCRIRE2 
  ADD FOREIGN KEY FK_INSCRIRE2_CENTRE_DE_LOISIRS (IDINSCRIT)
      REFERENCES CENTRE_DE_LOISIRS (IDINSCRIT) ;


ALTER TABLE INSCRIRE2 
  ADD FOREIGN KEY FK_INSCRIRE2_PERSONNE (IDCLIENT)
      REFERENCES PERSONNE (IDCLIENT) ;

