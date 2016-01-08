<?php
//hachage du mot de passe 
$pass_hache = sha1($_POST['pass']);

//Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM utilisateur WHERE pseudo = :pseudo AND password = :password');
$req->execute(array(
	'pseudo' =>$pseudo,
	'password' =>$password_hache));
$resultat = $req->fetch();

if (!$resultat)
{
	echo 'auvais identifiant ou mot de passe !';
}
else 
{
	session_start();
	$_SESSION['idUtilisateur'] = $resultat['idUtilisateur'];
	$_SESSION['pseudo'] = $pseudo;
	echo 'Vous êtes connecté !';
}