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

while(!$resultat)
{
    if($resultat)
    {
        session_start();
        $_SESSION['login'] = $login;
        echo 'Vous êtes connecté !';

        header('refresh:3;Espace_Utilisateur.php');
        exit();
    }
    elseif($login == "admin" && $password == "admin75000")
    {
        session_start();
        $_SESSION['login'] = $login;
        echo 'Administrateur'. $login;
        header('refresh:3;EspaceAdmin.php');
        exit();
    }
    else 
    {
        echo 'Veuillez réessayer';
    }
}

?>