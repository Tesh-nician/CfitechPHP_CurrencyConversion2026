<?php

session_start();
session_destroy();
$nav = "reset_sessions.php";


require "header.php";

?>


<h1>La session est totallement destroyé!!! </h1>


<?php

require "footer.php";

?>



