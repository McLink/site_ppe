<? php
session_start();
$titre="Connexion";
include("connexion_base.php");
echo'<p><i>Vous êtes ici</i> : <a href="./index.html">Page de connexion au site</a> ---> Connexion';

function erreur($err='')
{
	$mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
	exit('<p>'.$mess.'</p>
	<p>Cliquez <a href="./index.html">ici</a> pour revenir à la page d'acceuil</p>
}

echo"<h1>Connexion</h1>";
if ($id!=0) 
erreur(ERR_IS_CO);

else 
{
	$message='';
	if (empty($_POST['login']) || empty($_POST['password'])
	{
		$message= '<p>Une erreur s/'est produite pendant votre identification. Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>;
	}
	else
	{
		$query=$db->prepare('SELECT login, password from personne')

	}
?>