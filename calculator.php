<?php
function start_page($title)
{
    echo '<!DOCTYPE html><html 
        lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};

function end_page()
{
    echo'</body></html>'.PHP_EOL;
}
?>

<?php
start_page('calculator 2.0');
$operateurs = '*+-/';
echo '<form action = "calcul.php" method = "get">
                <input type = "text" name = "op1">
                <input type = "text" name = "op2"><br/>';

for($cpt = 0; $cpt <= 3 ; ++$cpt)
{
    echo ' <input ';
    if($cpt == 0)
    {
        echo ' checked = "checked" ';
    }
    echo ' type = "submit" name = "Action" value = "' . $operateurs[$cpt] . '"/>' . '<br/>' ."\n";
}

//echo '<input type = "submit" value = "Action"></form>';

end_page();
?>










<!-- input checked= "checked" type="radio" name="op" value="*"/>*<br/> -->
<!-- input type = "radio" name = "op" value = "+"/>+<br/> -->
<!-- input type = "radio" name = "op" value = "-"/>-<br/> -->
<!-- input type = "radio" name = "op" value = "/"/>/<br/> -->