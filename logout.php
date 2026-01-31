<?php
session_start();
unset($_SESSION['pseudo']);
unset($_SESSION['email']);



require "header.php";

?>


<h1>Au revoir et bonnes fêtes!</h1>


<?php

require "footer.php";

?>
