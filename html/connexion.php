<?php

$titre="Connexion";
include("connexion_base.php");

// Hachage du mot de passe
$password_hache = sha1($_POST['password']);
$login=$_POST['login'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT Login FROM personne WHERE Login  = :login AND  Mot_De_Passe = :password');
$req->execute(array(
    'login' => $login,
    'password' => $password_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['login'] = $login;
    echo 'Vous êtes connecté !';

    header('refresh:3;Espace_Utilisateur.php');
	exit();
}
	
?>