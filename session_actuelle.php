
<?php

session_start();
$nav= "session_actuelle.php";
require "header.php";


//Show all session variables

print_r($_SESSION);

?>

<h1>Tous les variables des session</h1>



<?php

require "footer.php";

?>