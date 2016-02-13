<!--<?php 
//session_start();
//if (isset($_SESSION['login']))
{
   // echo 'Bonjour ' . $_SESSION['login'];
}
?>!-->

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mairie de villiers | Pour une ville souriante et conviviale !</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/tuto.css" rel="stylesheet">
  </head>

<body>
<header id="top">
  <a href="../index.html"><img class="img-responsive" id="banniere" src="../Images/banniere2.png"></img></a>
</header>
<div class="container-fluid">
  <div class="row">
    <nav class="navbar navbar-default" id="couleurnav">
      <div class="container-fluid">
    <!-- Ici se trouve le "Hamburger button" -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--Ici il s'agit du bouton permettant de faire défiler le menu lorsqu'il est réglé pour les mobiles-->
        </div>
    <?php
//On verifie que lidentifiant de lutilisateur est defini
if(isset($_GET['login'])){
        $log = intval($_GET['login']);
        //On verifie que lutilisateur existe
        $request = mysql_query('select sexe, nom, prenom, datenaiss, adresse, cp, tel, email, login from Personne where login="'.$log.'"');
        if(mysql_num_rows($req)>0){
                $result = mysql_fetch_array($request);
                //On affiche les donnees de lutilisateur
?>
Voici le profil de "<?php echo htmlentities($result['login']); ?>" :
<table style="width:500px;">
        <tr>
        <td class="left"><h1><?php echo htmlentities($result['login'], ENT_QUOTES, 'UTF-8'); ?></h1>
        Sexe: <?php echo htmlentities($result['sexe'], ENT_QUOTES, 'UTF-8'); ?><br />
        Nom: <?php echo htmlentities($result['nom'], ENT_QUOTES, 'UTF-8'); ?><br />
        Prénom: <?php echo htmlentities($result['prenom'], ENT_QUOTES, 'UTF-8'); ?><br />
        Date de naissance: <?php echo htmlentities($result['datenaiss'], ENT_QUOTES, 'UTF-8'); ?><br />
        Adresse: <?php echo htmlentities($result['adress'], ENT_QUOTES, 'UTF-8'); ?><br />
        Code Postal: <?php echo htmlentities($result['cp'], ENT_QUOTES, 'UTF-8'); ?><br />
        Téléphone: <?php echo htmlentities($result['tel'], ENT_QUOTES, 'UTF-8'); ?><br />
        Email: <?php echo htmlentities($result['email'], ENT_QUOTES, 'UTF-8'); ?><br />
        Login: <?php echo htmlentities($result['login'], ENT_QUOTES, 'UTF-8'); ?><br />
        </td>
    </tr>
</table>
<?php
        }
        else{
            echo 'Cet utilisateur n\'existe pas.';
        }
}
else{
    echo 'L\'identifiant de l\'utilisateur n\'est pas d&eacute;fini.';
}
?>

   <div class="row">
      <footer class="col-lg-12">
        <div class="row">
          <p class="col-lg-8">
           Ce site a été créé par Chung Steven et Quentin Vilcoque, Man Sophervuth, Malekama Dominique.
          </p>
          <a href="#top"><p class="col-lg-offset-2 col-lg-2">
            Haut de page 
          </p>
        </a>
        </div>



      </footer>
    </div>
  </div>

    <script src="../js/jquery-1.11.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Ici se trouve des fichiers Javascript nécessaires (notamment la librairie jQuery) -->
    <? php
    header('refresh:3;../Profil_Utilisateur.php');
    exit();
    ?>

  </body>
    
</html>
