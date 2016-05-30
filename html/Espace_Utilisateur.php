<?php
include("connexion_base.php");
ini_set('display_errors', 1);
session_start();
if(isset($_SESSION['login']))
{
    echo 'Bonjour '. $_SESSION['login'];
    echo ' <a href="deco.php">Deconnexion</a>';
}



?>

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
  <a href="../index.php"><img class="img-responsive" id="banniere" src="../Images/banniere2.png"></img></a>
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
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="couleur">
              <li class="active"><a href="../index.php">Accueil</a></li>
              <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
              <li><a href="../html/InscripEnfant.php">Inscription d'un enfant</a></li>
              <li><a href="../html/InscripActivites.php">Inscription aux activités</a></li>
              <li><a href="../html/Activites.php">Activités</a></li>
              <li><a href="../html/Enfant.php">Enfant(s)</a></li>
            </ul>
          </div>  
        
          <?php
          include("connexion_base.php");
          if(isset($_SESSION['Login']))
          {
            $id = intval($_GET['Login']);
            $dn = mysql_query('SELECT Sexe, Nom, Prenom, Adresse, CP, Ville, Email, Tel, Login, Mot_de_Passe FROM personne WHERE login = "'.$Login.'"');
            if(mysql_num_rows(dn)>0)
            {
                $dnn = mysql_fetch_array($dn);
            }
          }
          ?>
    <section id="contact">

    <div class="container">
         <h1>Profil</h1>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="form-group">
                          <label for="nom">Pseudo :</label>
                      <?php 
                      echo htmlentities($_SESSION['login']); ?>
                        </div>
           
                        <div class="form-group">
                          <label for="nom">Nom</label>
                           <?php echo htmlentities($_SESSION['nom']); ?>
                        </div>

                        <div class="form-group">
                          <label for="prenom">Prenom</label>
                           <?php echo htmlentities($_SESSION['prenom']); ?>
                        </div>

                        <div class="form-group"> 
                          <label for="sexe">Sexe</label>
                          <?php echo htmlentities($_SESSION['sexe']); ?>
                        </div>

                        <div class="form-group">
                        <label for="datanaiss">Date de naissance :</label>
                       <?php echo htmlentities($_SESSION['datenaiss']); ?>
                        </div>

                        <div class="form-group">
                          <label for="adresse">Adresse</label>
                           <?php echo htmlentities($_SESSION['Adresse']); ?>
                        </div>
                        <div class="form-group">
                          <label for="cp">Code Postal</label>
                           <?php echo htmlentities($_SESSION['CP']); ?>
                        </div>
                        <div class="form-group">
                          <label for="ville">Ville</label>
                         <?php echo htmlentities($_SESSION['Ville']); ?>
                        </div>
                        <div class="form-group">
                         <label for="email">Email</label>
                        <?php echo htmlentities($_SESSION['Email']); ?>
                        </div>
                        <div class="form-group">
                          <label for="tel">Telephone</label>
                         <?php echo htmlentities($_SESSION['Tel']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
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
    <script type="text/javascript">
      $('a[href^="#top"]').click(function(){
      var the_id = $(this).attr("href");

      $('html, body').animate({
        scrollTop:$(the_id).offset().top
      }, 'slow');
      return false;
      });
    </script>
  </body> 
</html>