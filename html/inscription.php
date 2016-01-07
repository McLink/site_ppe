<?php
include("connexion_base.php"); // connexion à la bdd
ini_set('display_errors', 1);
header( 'content-type: text/html; charset=utf-8' );

//Récupération des parametre POST
$login = $_POST["login"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$sexe = $_POST["sexe"];
$datenaiss = $_POST["datenaiss"];
$adresse = $_POST["adresse"];
$cp = $_POST["cp"];
$ville = $_POST["ville"];
$email = VerifierAdresseMail($_POST["email"]);
$tel = $_POST["tel"];

//Vérification du login
if(isset($login))
{
	echo "Login confirme";
	echo "</br>";
}
else
{
	echo "Veuillez taper votre login";
	echo "</br>";
}

//Vérification du mot de passe en 2 parties
function chainealeatoire()
{
	$alpha = 'abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
    return substr(str_shuffle($alpha),0,6);
}
if(isset($password) and isset($password2))
{
	if((strlen($password)>6 && strlen($password)<15)) 
		if(($password == $password2))
	{
		echo "Mot de passe confirme";
		echo "</br>";
	}
	else
	{
		echo "Mots de passes non identiques";
		echo "</br>";
	}
}
else
{
	echo "Veuillez taper votre mot de passe";
	echo "</br>";
}

//Vérification du nom
if(isset($nom))
{
	if(ctype_alpha($nom))
	{
		echo "Votre nom est ".$nom;
		echo "</br>";
	}
	else
	{ 
		echo "Votre nom doit être composé de lettres";
		echo "</br>";
	}
}
else
{ 
	echo "Votre nom n'est pas renseigne";
	echo "</br>";
}

//Vérification du prénom
if(isset($prenom))
{
	if(ctype_alpha($prenom))
	{
		echo "Votre prenom est ".$prenom;
		echo "</br>";
	}
	else
	{
		echo "Votre prenom doit être composé de lettres";
		echo "</br>";
	}
}
else
{
	echo "Veuillez entre votre prenom";
	echo "</br>";
}

//Vérification du sexe
if($sexe == "masculin")
{
	echo "Votre sexe est masculin";
	echo "</br>";
}
elseif($sexe == "feminin")
{
	echo "Votre sexe est feminin";
	echo "</br>";
}
else
{
	echo "Veuillez choisir votre sexe";
	echo "</br>";
}

//Vérification de la date de naissance
if(isset($datenaiss))
{
	echo "Votre date de naissance est valide ".$datenaiss;
	echo "</br>";
}
else
{
	echo "Date de naissance invalide";
	echo "</br>";
}

//Vérification de l'addresse
if(isset($adresse))
{
	echo "Votre adresse est ".$adresse;
	echo "</br>";
}
else
{
	echo "Veuillez entre votre adresse";
	echo "</br>";
}

//Vérification du téléphone
if(isset($tel))
{
	if(ctype_digit($tel))
	{
        echo "Votre numéro est ".$tel;
        echo "</br>";
    }
    else
	{
        echo "Il manque des chiffres";
        echo "</br>";
    }		
}
else
{
	echo "Veuillez entrer que des nombres";	
	echo "</br>";
}


//Vérification du mail
function VerifierAdresseMail($email)
{
  //Adresse mail trop longue (254 octets max)
  if(strlen($email)>254)
  {
    echo 'Votre adresse est trop longue.';
	echo "</br>";

  }

	$nonASCII ='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  	$nonASCII ='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  	$nonASCII ='ũūŭůűųŵŷźżztșțΐάέήίΰαβγδεζηθικλμνξοπρςστυφ';
  	$nonASCII ='χψωϊϋόύώабвгдежзийклмнопрстуфхцчшщъыьэюяt';
 	$nonASCII ='ἀἁἂἃἄἅἆἇἐἑἒἓἔἕἠἡἢἣἤἥἦἧἰἱἲἳἴἵἶἷὀὁὂὃὄὅὐὑὒὓὔ';
  	$nonASCII ='ὕὖὗὠὡὢὣὤὥὦὧὰάὲέὴήὶίὸόὺύὼώᾀᾁᾂᾃᾄᾅᾆᾇᾐᾑᾒᾓᾔᾕᾖᾗ';
  	$nonASCII ='ᾠᾡᾢᾣᾤᾥᾦᾧᾰᾱᾲᾳᾴᾶᾷῂῃῄῆῇῐῑῒΐῖῗῠῡῢΰῤῥῦῧῲῳῴῶῷ';

	$syntaxe = "#^[[:alnum:][:punct:]]{1,64}@[[:alnum:]-.$nonASCII]{2,253}\.[[:alpha:].]{2,6}$#";

	if(preg_match($syntaxe, $email))
	{
		echo "Email valide";
		echo "</br>";
	}
	else 
	{
		echo "Email invalide";
		echo "</br>";
	}
}

//Vérification de la ville
if(isset($ville))
{
	if(ctype_digit($ville))
	{
		echo "Nom de ville inconnu, veuillez entrer que des lettres";
		echo "</br>";
	}
	else
	{
		echo "Votre ville est ".$ville;
		echo "</br>";
	}
}
else
{
	echo "Veuillez entre votre ville";
	echo "</br>";
}

//Vérification du code postal
if(isset($cp))
{
	if(ctype_digit($cp))
	{
		echo "Votre code postal est ".$cp;
		echo "</br>";
	}
	else
	{
		echo "Veuillez entrer que des chiffres";
		echo "</br>";
	}
}
else
{
	echo "Veuillez entrer votre code postal";
	echo "</br>";
}


//Connexion à la base de données
//@mysql_pconnect($BD_serveur, $BD_utilisateur, $BD_motDePasse) or die("Impossible de se connecter au serveur de la base de données");
//@mysql_select_db($BD_base) or die("Impossible de se connecter à la base de données");

//Requete d'envoi des données
$requete = $bdd->prepare("INSERT INTO personne (Sexe, Nom, Prenom, datenaiss, Adresse, CP, Tel, Email, Login, Mot_De_Passe) 
	VALUES (':sexe',':nom',':prenom',':datenaiss', ':adresse',':cp',':tel',':email',':login',':password')");
$requete->execute(array(

	'sexe'=>$sexe,
	'nom'=>$nom,
	'prenom'=>$prenom,
	'datenaiss'=>$datenaiss,
	'adresse'=>$adresse,
	'cp'=>$cp,
	'tel'=>$tel,
	'email'=>$email,
	'login'=>$login,
	'$password'=>$password));

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


//header('refresh:10;../index.html');
//exit();
?>