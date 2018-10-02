<?php
include 'utils.inc.php';
?>
<?php
start_page("Td2");

$step = $_GET['step'];
if($step == null)
    $step = "LOGIN";
echo $step;

echo'
<form action = "test-pass.php" method = "post">
        Login<input type = "text" name = "login"><br/>
        Mot de Passe<input type = "password" name = "mot_de_passe"><br/>
        <input type = "submit" name = "action" value = "ok"/>
</form>';
end_page();
?>