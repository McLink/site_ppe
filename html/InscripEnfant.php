<?php 
if (isset($_SESSION['login']))
{
    echo 'Bonjour ' . $_SESSION['login'];
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
        <li><a href="Espace_Utilisateur.php">Accueil</a></li>
        <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
        <li><a href="Activites.php">Activités</a></li>
        <li><a href="InscripActivites.php">Inscriptions aux activités</a></li>
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
      <h1>Inscription de l'enfant</h1>
          <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                      <form method='post' action="inscripEnf.php">
                        
                        <!-- Etape 1 du processus d'inscription -->

                        <div class="form-group">
                          <label for="nom">Nom</label>
                          <input type="text" name="nom" maxlength="20" class="form-control" id="nom" placeholder="Entrez le Nom">
                        </div>
                        <div class="form-group">
                          <label for="prenom">Prenom</label>
                          <input type="text" name="prenom" maxlength="20" class="form-control" id="prenom" placeholder="Entrez le Prenom">
                        </div>
                        <div class="form-group"> 
                          <label for="sexe">Sexe</label>
                          <div class="radio">
                            <label><input type="radio" name="sexe" id="sexe" value="masculin">Masculin</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="sexe" id="sexe" value="feminin">Féminin</label>
                          </div>
                        </div>
                        <div class="form-group">
                        <label for="datanaiss">Date de naissance :</label>
                        <input type="date" min="1900-01-01" max="2014-12-31" name="datenaiss">
                        </div>
                        <button type="submit" value="valider" class="btn btn-default">Envoyer</button>
                        <button type="reset" class="btn btn-default">Annuler</button>
                      </form>
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