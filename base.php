<?php
$dbLink = mysqli_connect("mysql-lammenslouis.alwaysdata.net", "166948", "Jrdppdsvp")
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , "lammenslouis_bdtp2")
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
$query = 'SELECT Id, EMail, Date FROM user';

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['Id'] . '<br/>';
    echo $dbRow['Email'] . '<br/>';
    echo $dbRow['Date'] . '<br/>';
    echo '<br/><br/>';
}
?>


