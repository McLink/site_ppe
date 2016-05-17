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
            <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
            <li><a href="Services.php">Services</a></li>
            <li class="active"><a href="FAQ.php">FAQ<span class="sr-only">(current)</span></a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Mentions_legales.php">Mentions légales</a></li>
          </ul>
           <form class="navbar-form navbar-right" action="connexion.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="login" placeholder="Login">
          <input type="password" class="form-control" name="password" placeholder="Mot de passe">
        </div>
        <button class="btn btn-default" type="submit">Connexion</button>
        <a class="btn btn-default" role="button" href="Page_Inscription.php">Inscription</a>
      </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>


 <div class="row">
  <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
    <p>
    <legend>F.A.Q</legend>
    <br/> 
    </p>
 

  <ul> <!-- dl : élément structurel annonçant et encadrant une liste de définitions.-->
    <h2 class="question">Comment fait on pour s'inscrire et se connecter ?</h2> <!-- dt :élément contenant le terme à définir. -->
    <li class="reponse">Pour s'inscrire il suffit d'aller sur la page <a href="Page_Inscription.php">inscription</a> et de renseigner tout les renseignements demandé puis pour ce connecter, renseignez votre identifiant et votre mot de passe en haut à droite.  </li> <!-- dd : élément contenant la description du terme précédemment écrit. -->
    <!--fausse page inscription a changer quand ça sera fait -->
     <!--fausse page connexion a changer quand ça sera fait -->

    <br/>
    <h2 class="question">Comment vous contacter ?</h2>
    <li class="reponse">Pour nous contacter c'est très simple, il suffit de cliquer sur  <a href="Contact.php">ce lien</a> puis vous avez toutes nos coordonnées avec un formulaire de contact directement sur le site.</li>
    <br/>
    <h2 class="question">Quels sont vos horaires d'ouverture ?</h2>
    <li class="reponse"> 
      <table class="table" id="tableau1">
       <caption>Horaires d'ouverture :</caption>
         <tr>
             <th>Lundi</th>
             <th>Mardi</th>
             <th>Mercredi</th>
             <th>Jeudi</th>
             <th>Vendredi</th>
             <th>Samedi</th>
         </tr>

         <tr>
             <td>8h/13h</td>
             <td>8h/13h</td>
             <td>8h/13h</td>
             <td>8h/13h</td>
             <td>8h/13h</td>
             <td>8h/13h</td>
         </tr>
         <tr>
             <td>15h/20h</td>
             <td>15h/20h</td>
             <td>15h/20h</td>
             <td>15h/20h</td>
             <td>15h/20h</td>
         </tr>
      </table>
    </li> 
    <br/>
    
    <h2 class="question">Quels services proposez vous ?</h2>
    <li class="reponse">Les principaux services que nous proposons sont : <br>
     - L'accueil des enfants pour les centres aérés et l'inscription pour les cantines scolaires <br>
     - Un service d'information quant aux activités et évènements de la commune<br>
     <br/>

  </ul>
  </div>
</div>

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
    <script type="text/javascript" src="../js/jquery-1.11.2.js" type="text/javascript"></script>
      <script type="text/javascript">
      // Execution de cette fonction lorsque le DOM sera entièrement chargé
      $(document).ready(function() {
        // Masquage des réponses
        $(".reponse").hide();
        // CSS : curseur pointeur
        $(".question").css("cursor", "pointer");
        // Clic sur la question
        $(".question").click(function() {
          // Actions uniquement si la réponse n'est pas déjà visible
          if($(this).next().is(":visible") == false) {
            // Masquage des réponses
            $(".reponse").slideUp();
            // Affichage de la réponse placée juste après dans le code HTML
            $(this).next().slideDown();
          }
        });
      });
      </script>
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