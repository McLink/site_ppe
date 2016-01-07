
<?php
//Paramètre de connexion à la base de données
//$BD_serveur = "localhost";
//$BD_utilisateur = "root";
//$BD_motDePasse = "root";
//$BD_base = "mairiedevilliers";

	
//Connexion à la base
//@mysql_pconnect($BD_serveur, $BD_utilisateur, $BD_motDePasse) or die("Impossible de se connecter au serveur de la base de données");
//@mysql_select_db($BD_base) or die("Impossible de se connecter à la base de données");

//Récupération des données
//$requete = "SELECT password, login FROM personne";
//$result = @mysql_query($requete);

//Affichage des données du client
//$requete2 = "SELECT * FROM personne WHERE login";
//$result2 = @mysql_query($requete2);


//Etape de connexion à l'espace adhérent
//session_start();
//    $_SESSION['login'] = $login;
	//header("Location: ../index.html");
//	$message = 'Bienvenue'.$_SESSION['login'];
/* Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1) */
header('Content-type: text/html; charset=UTF-8');

/* Création d'une fonction - utilisée dans la récupération des variables - qui teste la configuration get_magic_quotes_gpc du serveur.
Si oui, supprime avec la fonction stripslashes les antislashes "\" insérés dans les chaines de caractère des variables gpc (GET, POST, COOKIE) */
function Verif_magicquotes ($chaine)
{
if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);

return $chaine;
}

/* Initialisation du message de réponse */
$message = null;


/* Si le formulaire est envoyé */
if (isset($_POST['login']))
{

    /* Récupération des variables issues du formulaire
    Teste l'existence les données post en vérifiant qu'elles existent, qu'elles sont non vides et non composées uniquement d'espaces.
    (Ce dernier point est facultatif et l'on pourrait se passer d'utiliser la fonction trim())
    En cas de succès, on applique notre fonction Verif_magicquotes pour (éventuellement) nettoyer la variable */
    $login = (isset($_POST['login']) && trim($_POST['login']) != '')? Verif_magicquotes($_POST['login']) : null;
    $password = (isset($_POST['password']) && trim($_POST['password']) != '')? Verif_magicquotes($_POST['password']) : null;
   


    if(isset($login,$password))
    {
         /* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation
         A MODIFIER avec vos valeurs */
         $hostname = "localhost";
         $database = "mairiedevilliers";
         $username = "root";
         $password = "root";
   
         $connection = mysql_connect($hostname, $username, $password) or die(mysql_error());

         /* Connexion à la base */
         mysql_select_db($database, $connection);
   
         /* Indique à mySql de travailler en UTF-8 (par défaut mySql risque de travailler au standard ISO-8859-1) */
         mysql_query("SET NAMES 'utf8'");
   
         /* Préparation des données pour les requêtes à l'aide de la fonction mysql_real_escape_string */
         $login = mysql_real_escape_string($login);
         $password = mysql_real_escape_string($password);
   
   
         /* Requête pour récupérer les enregistrements répondant à la clause :
         champ du pseudo et champ du mdp de la table = pseudo et mdp postés dans le formulaire*/
        $requete = "SELECT * FROM personne WHERE login = '".$login."' AND password = '".$password."'"; 
   
         /* Exécution de la requête */
         $req_exec = mysql_query($requete) or die(mysql_error());
   
         /* Création du tableau associatif du résultat */
         $resultat = mysql_fetch_assoc($req_exec);

         /* Les valeurs (si elles existent) sont retournées dans le tableau $resultat;  */
         if (isset($resultat['login'],$resultat['password'])) 
               {
                 /* Démarre la session et enregistre le pseudo dans la variable de session $_SESSION['login']
                 qui donne au visiteur la possibilité de visiter les pages protégées.  */
                 session_start();
                 $_SESSION['login'] = $login;
           
                 /* A MODIFIER Remplacer le '#' par l'adresse de votre page de destination, sinon ce lien indique la page actuelle. */
                 $message = 'Bonjour '.htmlspecialchars($_SESSION['login']).' <a href = "#">Cliquez ici pour vous connecter</a>';
                }
                else
                {   /* Le pseudo ou le mot de passe sont incorrect */
                $message = 'Le pseudo ou le mot de passe sont incorrect';
                }

    }
    else
    {  /* au moins un des deux champs "pseudo" ou "mot de passe" n'a pas été rempli */
    $message = 'Les champs Pseudo et Mot de passe doivent être remplis.';
    }
}


?>