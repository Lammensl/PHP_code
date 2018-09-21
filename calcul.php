<?php
function start_page($title)
{
    echo '<!DOCTYPE html><html 
        lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};

function end_page()
{
    echo ' </body></html>'.PHP_EOL;
}
?>

<?php
start_page('calculator 2.0');

$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$Action = $_GET['Action'];


if('*' == $Action)
{
    echo $op1 * $op2;
}

elseif('+' == $Action)
{
    echo $op1 + $op2;
}

elseif('-' == $Action)
{
    echo $op1 - $op2;
}

elseif('/' == $Action)
{
    echo $op1 / $op2;
}

else
{
    echo '<br/><strong>operateur' . $op . 'non gere </strong>';
}

end_page();
?>
