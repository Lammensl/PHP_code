<?php

    require "utils.inc.php";

    start_page("Td2");

$dbLink = mysqli_connect("mysql-lammenslouis.alwaysdata.net", "166948", "Jrdppdsvp")
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , "lammenslouis_bdtp2")
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
$query = 'INSERT INTO user (Date, Email ...) VALUES (\'' . $today . '\', \''
. $email . '\', '  ')';


    $id = $_POST["Identifiant"];
    $M = $_POST["M"];
    $F = $_POST["F"];
    $email = $_POST["E-Mail"];
    $Mdp = $_POST["Mot de passe"];
    $verif = $_POST["verification mot de passe"];
    $Tel = $_POST["Telephone"];
    $CG = $_POST["CGU"];
    $act = $_POST["action"];

if($act == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $Mdp;
    mail("lammlouis@outlook.fr", "salut", $message);
    echo '<strong>Message envoyé</strong>';
}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

end_page();
?>

