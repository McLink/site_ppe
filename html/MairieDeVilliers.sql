Create database MairieDeVilliers;
Use MairieDeVilliers;

Create table PeriodeCantine(CodePeriode int(3) not null,
							DateDebut date,
							DateFin date,
							Tarif decimal(10,2),
							Primary Key(CodePeriode));

Create table PeriodeCentreLoisirs(CodePeriode int(3) not null,
								  DateDebut date,
								  DateFin date,
								  Tarif decimal(10,2),
								  Primary Key(CodePeriode));

Create table CategoriePro(CodeCat int (3) not null,
						  LibelleCat varchar (25),
						  IdClient int(3),
						  Primary Key(CodeCat,IdClient),
						  Foreign Key(IdClient) References Personne(IdClient));

Create table Formulaire(IDForm int(3) not null,
						Categorie varchar(25),
						AdresseResidence varchar(25),
						Motif varchar(20),
						Primary Key(IDForm));

Create table Personne(IDClient int(3) not null,
					  Sexe varchar(1),
					  Nom varchar(20),
					  Prenom varchar(20),
					  DateNaiss date,
					  Adresse varchar(25),
					  CP int(5) not null,
					  Tel int(10) not null,
					  Email varchar(25),
					  Login varchar(25),
					  Mot_de_Passe varchar(25),
					  Primary Key(IDClient));
					  
Create table Appartenir(IDClient int(3) not null,
						CodeCat int(3) not null,
						Primary Key(IDClient,CodeCat),
						Foreign Key(IDClient) References Personne(IDClient),
						Foreign Key(CodeCat) References CategoriePro(CodeCat));
						
Create table Demande(IDClient int(3) not null,
					 IDForm int(3) not null,
					 Primary Key(IDClient,IDForm),
					 Foreign Key(IDClient) References Personne(IDClient),
					 Foreign Key(IDForm) References Formulaire(IDForm));
					 
Create table CentreDeLoisirs(IDInscrit int(3) not null,
							 Ecole varchar(20),
							 DateInscription date,
							 Region varchar(20),
							 Capacite varchar(20),
							 IDEnf int(3) not null,
							 Primary Key(IDInscrit,IDEnf),
							 Foreign Key(IDEnf) References Enfant(IDEnf));
							 
Create table Cantine(IDInscrit int(3) not null,
					 Etablissement varchar(25),
					 DateInscription date,
					 Capacite varchar(20),
					 IDEnf int(3) not null,
					 Primary Key(IDInscrit,IDEnf),
					 Foreign Key(IDEnf) References Enfant(IDEnf));

Create table DureeCantine(IDInscrit int(3) not null,
						  CodePeriode int(3) not null,
						  Primary Key(IDInscrit,CodePeriode),
						  Foreign Key(IDInscrit) References Cantine(IDInscrit),
						  Foreign Key(CodePeriode) References PeriodeCantine(CodePeriode));

Create table DureeCentre(IDInscrit int(3) not null,
						 CodePEriode int(3) not null,
						 Primary Key(IDInscrit,CodePeriode),
						 Foreign Key(IDInscrit) References CentreDeLoisirs(IDInscrit),
						 Foreign Key(CodePeriode) References PeriodeCentre(CodePeriode));

Create table Enfant(IDEnf int(3) not null,
					Nom varchar(25),
					Prenom varchar(25),
					DateNaiss date,
					Sexe varchar(1),
					Primary Key(IDEnf));

Create table Inscrire(IDEnf int(3) not null,
					  IDClient int(3) not null,
					  Primary Key(IDEnf,IDClient),
					  Foreign Key(IDEnf) References Enfant(IDEnf),
					  Foreign Key(IDClient) References Personne(IDClient));

Create table InscrireCentre(IDEnf int(3) not null,
							IDInscrit int(3) not null,
							Primary Key(IDEnf,IDInscrit),
							Foreign Key(IDEnf) References Enfant(IDEnf),
							Foreign Key(IDInscrit) References CentreDeLoisirs(IDInscrit));

Create table InscrireCantine(IDEnf int(3) not null,
							 IDInscrit int(3) not null,
							 Primary Key(IDEnf,IDInscrit),
							 Foreign Key(IDEnf) References Enfant(IDEnf),
							 Foreign Key(IDInscrit) References Cantine(IDInscrit));

Create table Identifiant(IDLogin int(3) not null,
						 MotDePasse varchar(15),
						 IDClient int(3) not null,
						 Primary Key(IDLogin,IDClient),
						 Foreign Key(IDClient) References Personne(IDClient));

Create table Contact(IDContact int(3) not null,
					 Nom varchar(25),
					 Prenom varchar(25),
					 Email varchar(20),
					 Adresse varchar(25),
					 CP int(5),
					 Tel int(10),
					 Motif varchar(500),
					 Primary Key(IDContact));