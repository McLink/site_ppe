<?php
include('Config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Profil utilisateur</title>
    </head>
    <body>
        <div class="header">
                <a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/" alt="Espace Utilisateur" /></a>
            </div>
        <div class="content">
<?php
//On verifie que lidentifiant de lutilisateur est defini
if(isset($_GET['IDClient']))
{
        $id = intval($_GET['IDClient']);
        //On verifie que lutilisateur existe
        $dn = mysql_query('SELECT login, email, avatar, signup_date FROM  WHERE id="'.$IDClient.'"');
        if(mysql_num_rows($dn)>0)
        {
                $dnn = mysql_fetch_array($dn);
                //On affiche les donnees de lutilisateur
?>
Profil de "<?php echo htmlentities($dnn['login']); ?>" :
<table style="width:500px;">
        <tr>
        <td><?php
if($dnn['avatar']!='')
{
        echo '<img src="'.htmlentities($dnn['avatar'], ENT_QUOTES, 'UTF-8').'" alt="Image Perso" style="max-width:100px;max-height:100px;" />';
}
else
{
        echo 'Cet utilisateur n\'a pas d\'image perso.';
}
?></td>
        <td class="left"><h1><?php echo htmlentities($dnn['login'], ENT_QUOTES, 'UTF-8'); ?></h1>
        Email: <?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?><br />
        Cet utilisateur s'est inscrit le <?php echo date('d/m/Y',$dnn['signup_date']); ?></td>
    </tr>
</table>
<?php
        }
        else
        {
                echo 'Cet utilisateur n\'existe pas.';
        }
}
else
{
        echo 'L\'identifiant de l\'utilisateur n\'est pas d&eacute;fini.';
}
?>
                </div>
                <div class="foot"><a href="users.php">Retour &agrave; la liste des utilisateurs</a> - <a href="http://www.supportduweb.com/">Support du Web</a></div>
        </body>
</html>