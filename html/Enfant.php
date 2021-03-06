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


    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--Début de la barre de navigation -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="couleur">
        <li><a href="../index.php">Accueil</a></li>
              <li><a href="Espace_Utilisateur.php">Profil</a></li>
              <li><a href="InscripEnfant.php">Inscription d'un enfant</a></li>
              <li><a href="InscripActivites.php">Inscription aux activités</a></li>
              <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
              <li class="active"><a href="../html/Enfant.php">Enfants</a></li>
              <li><a href="Activites.php">Activités</a></li>
            </ul>
    </div> <!--/.navbar-collapse-->
  </div> <!--/.container-fluid-->
</nav>
</div>

<?php  
          include("connexion_base.php");
          if(isset($_SESSION['IDENF']))
          {
            $id = intval($_GET['IDENF']);
            $dn = mysql_query('SELECT * FROM enfant WHERE IDENF = "'.$IDENF.'"');
            if(mysql_num_rows(dn)>0)
            {
                $dnn = mysql_fetch_array($dn);
            }
        }
    ?> 

<section id="Enfant">
  <div class="container">
      <h1>Enfant</h1>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="form-group">
                          <label for="nom">Nom :</label>
                           <?php echo htmlentities($_SESSION['nom']); ?>
                        </div>
                        <div class="form-group">
                          <label for="prenom">Prenom :</label>
                           <?php echo htmlentities($_SESSION['prenom']); ?>
                        </div>
                        <div class="form-group"> 
                          <label for="sexe">Sexe :</label>
                          <?php echo htmlentities($_SESSION['sexe']); ?>
                        </div>
                        <div class="form-group">
                        <label for="datanaiss">Date de naissance :</label>
                       <?php echo htmlentities($_SESSION['datenaiss']); ?>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
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
</body>
</html>