
<?php


$nav= "session_actuelle.php";
require "header.php";
session_start();

echo "<h1>Liste de tous les variables des session</h1>";

var_dump( $_SESSION);
//xdebug_var_dump($_SESSION);

// Source - https://stackoverflow.com/a/19816742
// Posted by AbraCadaver, modified by community. See post 'Timeline' for change history
// Retrieved 2026-02-09, License - CC BY-SA 4.0

highlight_string("<?php\n\$data =\n" . var_export($_SESSION, true) . ";\n?>");


//print_r($_SESSION);



require "footer.php";

?>