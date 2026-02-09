
<?php

session_start();
$nav= "session_actuelle.php";
require "header.php";




var_dump( $_SESSION);
//xdebug_var_dump($_SESSION);

// Source - https://stackoverflow.com/a/19816742
// Posted by AbraCadaver, modified by community. See post 'Timeline' for change history
// Retrieved 2026-02-09, License - CC BY-SA 4.0

highlight_string("<?php\n\$data =\n" . var_export($_SESSION, true) . ";\n?>");


//print_r($_SESSION);

?>

<h1>Tous les variables des session</h1>



<?php

require "footer.php";

?>