

<?php
//Paramètre de connexion à la base de données
$BD_serveur = "localhost";
$BD_utilisateur = "root";
$BD_motDePasse = "";
$BD_base = "mairiedevilliers";

//Etape de connexion à l'espace adhérent
session_start();
	//header("Location: ../index.html");
	$message = 'Bienvenue'.$_SESSION['login'];
	
//Connexion à la base
@mysql_pconnect($BD_serveur, $BD_utilisateur, $BD_motDePasse) or die("Impossible de se connecter au serveur de la base de données");
@mysql_select_db($BD_base) or die("Impossible de se connecter à la base de données");

//Récupération des données
$requete = "SELECT password, login FROM personne";
$result = @mysql_query($requete);

//Affichage des données du client
$requete2 = "SELECT * FROM personne WHERE login";
$result2 = @mysql_query($requete2);
?>