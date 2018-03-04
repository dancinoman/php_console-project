<?php

include_once "php_console.php";

$fruit ="orange";

?> <h2> This is a test for debug log with <?php echo $fruit ?> </h2>

<?php
php_console($fruit);
