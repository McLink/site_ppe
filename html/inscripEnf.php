<?php
include("connexion_base.php"); // connexion à la bdd
ini_set('display_errors', 1);
header( 'content-type: text/html; charset=utf-8' );

//Récupération des parametre POST

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$sexe = $_POST["sexe"];
$datenaiss = $_POST["datenaiss"];

//Vérification du nom
if(isset($nom))
{
	if(ctype_alpha($nom))
	{
		echo "Le nom est ".$nom;
		echo "</br>";
	}
	else
	{ 
		echo "Le nom doit être composé de lettres";
		echo "</br>";
	}
}
else
{ 
	echo "Le nom n'est pas renseigne";
	echo "</br>";
}

//Vérification du prénom
if(isset($prenom))
{
	if(ctype_alpha($prenom))
	{
		echo "Le prenom est ".$prenom;
		echo "</br>";
	}
	else
	{
		echo "Le prenom doit être composé de lettres";
		echo "</br>";
	}
}
else
{
	echo "Veuillez entrer le prenom";
	echo "</br>";
}

//Vérification du sexe
if($sexe == "masculin")
{
	echo "Le sexe est masculin";
	echo "</br>";
}
elseif($sexe == "feminin")
{
	echo "Le sexe est feminin";
	echo "</br>";
}
else
{
	echo "Veuillez choisir le sexe";
	echo "</br>";
}

//Vérification de la date de naissance
if(isset($datenaiss))
{
	echo "La date de naissance est valide ".$datenaiss;
	echo "</br>";
}
else
{
	echo "Date de naissance invalide";
	echo "</br>";
}

//Connexion à la base de données
//@mysql_pconnect($BD_serveur, $BD_utilisateur, $BD_motDePasse) or die("Impossible de se connecter au serveur de la base de données");
//@mysql_select_db($BD_base) or die("Impossible de se connecter à la base de données");

//Requete d'envoi des données
$requete = $bdd->prepare("INSERT INTO enfant( Nom, Prenom, Datenaiss, Sexe) 
	VALUES(:nom, :prenom, :datenaiss, :sexe,);");
$requete->execute(array(

	'nom'=>$nom,
	'prenom'=>$prenom,
	'datenaiss'=>$datenaiss,
    'sexe'=>$sexe,));
	
echo "Felicitation votre enfant a ete enregistre";

//Résultat d'enregistrement
/*if(!$result)
{
	echo "Mauvaises informations";
}
else
{
	echo "Felicitation vous avez ete enregistre";
}
echo $result;*/


header('refresh:5;Espace_Utilisateur.php');
exit();
?>