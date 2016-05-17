<?php 
session_start();
if (isset($_SESSION['login']))
{
    echo 'Bonjour ' .$_SESSION['login'];
    echo ' <a href="html/Espace_Utilisateur.php">Espace Utilisateur</a>';
    echo ' <a href="html/deco.php">Deconnexion</a>';
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mairie de villiers | Pour une ville souriante et conviviale !</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tuto.css" rel="stylesheet">
  </head>

<body>
<header id="top">
  <a href="index.php"><img class="img-responsive" id="banniere" src="Images/banniere2.png"></img></a>
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
              <li class="active"><a href="index.php">Accueil<span class="sr-only">(current)</span></a></li>
              <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
              <li><a href="html/Services.php">Services</a></li>
              <li><a href="html/FAQ.php">FAQ</a></li>
              <li><a href="html/Contact.php">Contact</a></li>
              <li><a href="html/Mentions_legales.php">Mentions légales</a></li>
            </ul>
        <form class="navbar-form navbar-right" action="html/connexion.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="login" placeholder="Login">
          <input type="password" class="form-control" name="password" placeholder="Mot de passe">
        </div>
        <button class="btn btn-default" type="submit">Connexion</button>
        <a class="btn btn-default" role="button" href="html/Page_Inscription.php">Inscription</a>
        <a class="btn btn-default" role="button" href="html/PageAdmin.php">Admin</a>
      </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  </div>
        <div class="row">
        <section class="col-lg-offset-2 col-lg-8 col-lg-offset-2" >
          <h1>Bienvenue sur le site de la mairie de villiers</h1>
          <div class="row">
            <img class="col-xs-8 col-sm-4 col-md-4 col-lg-4" src="Images/Image1.png"></img>
            <p class="col-lg-8">
             Vous trouverez toutes les informations nécessaires pour vos démarches et nos différents services.
             Le site de la mairie est fait spécialement pour vous aider dans vos demandes, pour cela il y a différentes sections qui nous l'espérons trouveront satisfaction auprès de vous.

            </p>
          </div>
        </section>
      </div>
        <div class="row">
        <section class="col-lg-offset-2 col-lg-8 col-lg-offset-2" >
          <h1>Ce que la mairie peut vous offrir</h1>
          <div class="row">
            <img class="col-xs-8 col-sm-6 col-lg-4" id="image2" src="Images/Image2.png"></img>
            <p class="col-lg-8">
              <ul> 
              <li>Accédez à votre compte très facilement pour compléter vos démarches, il n'est plus nécessaire de se déplacer.Simple et rapide, l'inscription se fait très facilement.</li> 
              <li> Accédez aux différents services que la ville vous propose.</li> 
              <li>Contactez votre mairie grâce aux renseignements fournis, que ça soit en ligne, par téléphone, par mail ou par courrier.</li> 
              <li>Un flux d'informations constant et en direct est mis à votre disposition.</li>
              <li>Une F.A.Q est à votre disposition pour répondre aux questions les plus courantes.</li>
              </ul>
            </p>
          </div>
        </section>
      </div>
      <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
        <!-- Insertion du flux RSS -->
        <iframe src="http://s1.rsspump.com/rss.aspx?s=881109b5-b7ed-4829-ac93-c3ac8f715f28&amp;speed=2&amp;t=0&amp;d=0&amp;u=0&amp;p=1&amp;b=0&amp;ic=9&amp;font=Verdana&amp;fontsize=19px&amp;bgcolor=&amp;color=000000&amp;type=typewriter&amp;su=1&amp;sub=1&amp;sw=1" frameborder="0" width="100%" height="6%" scrolling="no" allowtransparency="true"></iframe><noframes><div style="background-color: none transparent;"><a href="http://www.adamazer.com/" title="">amazon banners</a></div></noframes>

      </div>

      <div class="row">
      <footer class="col-lg-12">
        <div class="row">
          <p class="col-lg-8">
            Ce site a été créé par Chung Steven et Quentin Vilcoque, Man Sophervuth, Malekama Dominique.
          </p>
          <a href="#top">
          <p class="col-lg-offset-2 col-lg-2">
            Haut de page 
          </p>
          </a>
        </div>
      </footer>
      </div>
  </div>
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
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