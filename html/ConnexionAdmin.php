<? php
// Hachage du mot de passe
$password = $_POST['password'];
$login= $_POST['login'];

if ($login != "admin" || $password != "admin75000")
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    echo 'Vous êtes connecté !';
    header('Location: EspaceAdmin.php');
    exit();
}

?>
