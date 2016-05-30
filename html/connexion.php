<?php

$titre="Connexion";
include("connexion_base.php");

// Hachage du mot de passe
$password = sha1($_POST['password']);
$login=$_POST['login'];

// Vérification des identifiants
// $req = $bdd->prepare('SELECT Login FROM personne WHERE Login  = :login AND  Mot_De_Passe = :password');
$req = $bdd->prepare('SELECT * FROM personne WHERE Login  = :login AND  Mot_De_Passe = :password');
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
        //var_dump($resultat); exit;
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['sexe'] = $resultat['SEXE'];
        $_SESSION['nom'] = $resultat['NOM'];
        $_SESSION['prenom'] = $resultat['PRENOM'];
        $_SESSION['datenaiss'] = $resultat['DATENAISS'];
        $_SESSION['Adresse'] = $resultat['ADRESSE'];
        $_SESSION['CP'] = $resultat['CP'];
        $_SESSION['Ville'] = $resultat['Ville'];
        $_SESSION['Tel'] = $resultat['TEL'];
        $_SESSION['Email'] = $resultat['EMAIL'];

        echo 'Vous etes connecte !';

        header('refresh:3;Espace_Utilisateur.php');
        exit();
    }

?>