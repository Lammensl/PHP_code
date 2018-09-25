
<?php
include 'utils.inc.php';
?>
<?php
start_page("Td2");
echo'
<form action = "data-processing.php" method = "post">
    Identifiant<input type = "text" name = "Identifiant"/><br/>
    M<input type = "radio" name = "sexe" value = "M"/>
    F<input type = "radio" name = "sexe" value = "F"/><br/>
    E-Mail<input type = "text" name = "E-Mail"/><br/>
    Mot de Passe<input type = "password" name = "Mot de passe"/><br/>
    Verification Mot de Passe<input type = "password" name = "verification mot de passe"/><br/>
    Telephone<input type = "text" name = "Telephone"/><br/>
    <select name = "pays">
        <option value = "France">France</option>
        <option value = "Belgique">Belgique</option>
        <option value = "Espagne">Espagne</option>
        <option value = "Pologne">Pologne</option>
    </select><br/>
    CGU<input type = "checkbox" name = "CGU"/><br/>
    <input type = "submit" name = "action" value = "mailer"/>
</form>';
end_page();
?>