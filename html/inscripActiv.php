<?php
include("connexion_base.php"); // connexion à la bdd
ini_set('display_errors', 1);
header( 'content-type: text/html; charset=utf-8' );

//Récupération des parametre POST

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$cantine = $_POST["cantine"];
$centre = $_POST["centre"];

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

//Vérification de la sélection de la cantine
if($cantine == "Cantine de l\'école Jean Zay")
{
	echo "Inscrit dans la cantine de l\'école Jean Zay";
	echo "</br>";
}
elseif($cantine == "Cantine de l\'école Louis Roussel")
{
	echo "Inscrit dans la cantine de l\'école Louis Roussel";
	echo "</br>";
}
elseif($cantine == "Cantine de l\'école Paul Eluard")
{
	echo "Inscrit dans la cantine de l\'école Paul Eluard";
	echo "</br>";
}

//Vérification de la sélection du centre
if($centre == "Centre de l\'école Jean Zay")
{
	echo "Inscrit dans le centre de l\'école Jean Zay";
	echo "</br>";
}
elseif($centre == "Centre de l\'école Louis Roussel")
{
	echo "Inscrit dans le centre de l\'école Louis Roussel";
	echo "</br>";
}
elseif($centre == "Centre de l\'école Paul Eluard")
{
	echo "Inscrit dans le centre de l\'école Paul Eluard";
	echo "</br>";
}

//Connexion à la base de données
//@mysql_pconnect($BD_serveur, $BD_utilisateur, $BD_motDePasse) or die("Impossible de se connecter au serveur de la base de données");
//@mysql_select_db($BD_base) or die("Impossible de se connecter à la base de données");

//Requete d'envoi des données
$requete = $bdd->prepare("INSERT INTO cantine(Etablissement) 
	VALUES(:cantine);");
$requete = $bdd->prepare("INSERT INTO centre_de_loisir(Ecole) 
	VALUES(:centre);");
$requete->execute(array(

	'nom'=>$nom,
	'prenom'=>$prenom,
	'cantine'=>$cantine,
    'centre'=>$centre,));
	
echo "Felicitation vous avez enregistré votre endant dans ses activités";

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