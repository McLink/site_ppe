<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mairie de villiers | Pour une ville souriante et conviviale !</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/tuto.css" rel="stylesheet">
  </head>

<body>
<header>
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
              <li><a href="Services.php">Services</a></li>
              <li><a href="FAQ.php">FAQ</a></li>
              <li><a href="Contact.php">Contact</a></li>
              <li><a href="Mentions_legales.php">Mentions légales</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  </div>
        <div class="row">
        <form class="navbar-form" action="CoAdmin.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="login" placeholder="Login">
          <input type="password" class="form-control" name="password" placeholder="Mot de passe">
        </div>
        <button class="btn btn-default" type="submit">Connexion</button>
      </form>
      </div>
      <div class="row">
      <footer class="col-lg-12">
        <div class="row">
          <p class="col-lg-8">
            Ce site a été créé par Chung Steven et Quentin Vilcoque, Man Sophervuth, Malekama Dominique.
          </p>
        </div>
      </footer>
      </div>
  </div>
    <script src="../js/jquery-1.11.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Ici se trouve des fichiers Javascript nécessaires (notamment la librairie jQuery) -->
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