Create database MairieDeVilliers;
Use MairieDeVilliers;



Create table Personne(IDClient int auto_increment,
					  Sexe varchar(1),
					  Nom varchar(20),
					  Prenom varchar(20),
					  DateNaiss date,
					  Adresse varchar(25),
					  CP int(5) not null,
					  Tel int(10) not null,
					  Email varchar(25),
					  Login varchar(25),
					  Mot_de_Passe varchar(40),
					  Primary Key(IDClient));
                      
