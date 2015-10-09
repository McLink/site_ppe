<?php
//Parametre de connexion à la base de données
$BD_serveur = "localhost";
$BD_utilisateur = "root";
$BD_motDePasse = "";
$BD_base = "mairiedevilliers";

//Récupération des parametre POST
$login = $_POST["login"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$sexe = $_POST["sexe"];
$datenaiss = $_POST["datenaiss"];
$adresse = $_POST["adresse"];
$tel = $_POST["tel"];
$email = VerifierAdresseMail($_POST["email"]);
$ville = $_POST["ville"];
$cp = $_POST["cp"];

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
		echo "Votre nom est".$nom;
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
		echo "Votre prenom est".$prenom;
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
	echo "Votre date de naissance est valide" .$datenaiss;
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
	echo "Votre adresse est".$adresse;
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
		if(($tel) == 10)
		{
			echo "Votre numéro est".$tel;
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
}
else
{
	echo "Veuillez entre votre numéro";
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
	if(ctype_alpha($ville))
	{
		echo "Votre ville est".$ville;
		echo "</br>";
	}
	else
	{
		echo "Veuillez entrer que des lettres";
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
		echo "Votre code postal est".$cp;
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
	echo "Veuillez entre votre code postal";
	echo "</br>";
}

//Connexion à la base de données
@mysql_pconnect($BD_serveur, $BD_utilisateur, $BD_motDePasse) or die("Impossible de se connecter au serveur de la base de données");
@mysql_select_db($BD_base) or die("Impossible de se connecter à la base de données");

//Requete d'envoie des données
$requete = "INSERT INTO personne (Sexe, Nom, Prenom, Adresse, CP, Tel, Email, Login, Mot_De_Passe) 
			VALUES ('$sexe','$nom','$prenom','$adresse','$cp','$tel','$email','$login','$password')";
$result = @mysql_query($requete);
@mysql_query ("INSERT INTO personne(datenaiss) VALUES ('$datenaiss')");
//Résultat d'enregistrement
if(!$result)
{
	echo "Mauvaises informations";
}
else
{
	echo "Felicitation vous avez ete enregistre";
}
?>