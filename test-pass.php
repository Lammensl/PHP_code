<?php
require "utils.inc.php";

start_page("Td2");

$dbLink = mysqli_connect("mysql-lammenslouis.alwaysdata.net", "166948_louis", "phpcc")
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , "lammenslouis_bdtp2")
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

$email = $_POST["login"];
$mdp = $_POST["mot_de_passe"];
$act = $_POST["action"];


$query = ' SELECT * FROM user WHERE EMail = '.'\''.$email . '\''.' AND Mot_de_passe = '.' \''.$mdp .'\'';
$dbResult = mysqli_query($dbLink, $query);

if($act == 'ok')
{
    if(!(mysqli_num_rows($dbResult) == 0)){
        header("Location: Page_ok.php");
    }
    else{
        header("Location: login.php?step=ERROR");
    }

}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
end_page();

?>
