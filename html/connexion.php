<?php

$titre="Connexion";
include("connexion_base.php");

// Hachage du mot de passe
$password = sha1($_POST['password']);
$login=$_POST['login'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT Login FROM personne WHERE Login  = :login AND  Mot_De_Passe = :password');
$req->execute(array(
'login' => $login,
'password' => $password));

$resultat = $req->fetch();

if(!$resultat)
    {
        echo 'Veuillez réessayer';
    }
else 
    {
        session_start();
        $_SESSION['login'] = $login;
        echo 'Vous etes connecte !';

        header('refresh:3;Espace_Utilisateur.php');
        exit();
    }

?>