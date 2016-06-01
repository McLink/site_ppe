<?php
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
        <li><a href="InscripEnfant.php">Inscriptions d'un enfant</a></li>
         <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
        <li class="active"><a href="../html/InscripActivites.php">Inscription aux activités</a></li>
        <li><a href="Enfant.php">Enfant(s)</a></li>
        <li><a href="Activites.php">Activités</a></li>
      </ul>
     <!--<form class="navbar-form navbar-right" action="connexion.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="login" placeholder="Login">
          <input type="password" class="form-control" name="password" placeholder="Mot de passe">
        </div>
        <button class="btn btn-default" type="submit">Connexion</button>
        <a class="btn btn-default" role="button" href="Page_Inscription.php">Inscription</a>
      </form>-->
    </div> <!--/.navbar-collapse-->
  </div> <!--/.container-fluid-->
</nav>
</div>

<section id="contact">
  <div class="container">
      <h1>Inscription aux activités</h1>
          <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                      <form method='post' action="inscripActiv.php">

                        <div class="form-group">
                          <label for="nom">Nom de l'enfant</label>
                          <input type="text" name="nom" maxlength="20" class="form-control" id="nom" placeholder="Entrez le Nom">
                        </div>
                        <div class="form-group">
                          <label for="prenom">Prenom de l'enfant</label>
                          <input type="text" name="prenom" maxlength="20" class="form-control" id="prenom" placeholder="Entrez le Prenom">
                        </div>
                        <div class="form-group"> 
                        <label id="cantine" for="cantine">Cantine</label>
                        <form>
                            <select name="cantine">
                            <option>Cantine</option>
                            <option>Cantine de l'école Jean Zay</option>
                            <option>Cantine de l'école Louis Roussel</option>
                            <option>Cantine de l'école Paul Eluard</option>
                            </select>
                        </form>
                        </div>
                        <div class="form-group"> 
                        <label id="centre" for="centre">Centre de loisirs</label>
                        <form>
                            <select name="centre">
                            <option>Centre de loisirs</option>
                            <option>Centre de l'école Jean Zay</option>
                            <option>Centre de l'école Louis Roussel</option>
                            <option>Centre de l'école Paul Eluard</option>
                            </select>
                        </form>
                        </div>
                        <button type="submit" value="valider" class="btn btn-default">Envoyer</button>
                        <button type="reset" class="btn btn-default">Annuler</button>
                        </div>
                        
                      </form>
                    </div>
                </div>
            </div>
        </div>
        <br/>
</section>

  <div class="row">
    <footer class="col-lg-14">
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