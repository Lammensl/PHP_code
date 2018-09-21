<?php
    function start_page($title)
    {
        echo '<!DOCTYPE html><html 
        lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
    };

    function end_page()
    {
        echo '<hr/><br/><strong>Test</strong><br/><hr/>
              </body></html>'.PHP_EOL;
    }
?>

<?php
start_page('titre');
end_page();
?>
