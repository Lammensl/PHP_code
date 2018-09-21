<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon site PHP</title>
</head>

<body>
<?php
echo '<strong>Voici mon premier programme PHP</strong><br/>'."\n";
echo 'C\'est pas mal non ?<br/>';
?>

<?php
$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';
?>

<?php
echo "$var1+$var2"; // affiche 6 + 1.3
?>
<br/>
<?php
echo $var1 + $var2; // affiche le resultat
?>
<br/>
<?php
echo $var1 + $var3; // var3 contient aucun chiffre
?>

<?php
echo $jour = date('l F d ,Y');
?>
<br/>
<?php
echo $jour;
?>
<br/>
<?php
$jour = date('d/m/Y' , strtotime('2020-04-01'));
?>


</body>

</html>