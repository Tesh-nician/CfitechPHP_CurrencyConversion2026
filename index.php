<?php

session_start();
//$_SESSION['role']="admin";
//$_SESSION['user']= [
//        'firstname'=>'Jonathan',
//    'lastname'=>'Deroo',
//    'login'=>'jonathan',
//    'password'=>'cfitech'
//];

$title = "Home";
$nav = "index.php";
require "header.php";

?>

<main role="main" class="container">

    <div class="starter-template">

        <div class="page1-membres-container">
            <h1 style="text-align: center"><p>Projet de Groupe <br> PHP Conversion 2026 </p> </h1>
            <h2>Membres du projet:     </h2>
            <ol>

                <li>Jonathan( gestion de projet)</li>
                <li>Jonathan ( frontend/backend )</li>
                <li>Jonathan (design graphique)</li>

            </ol>

        </div>






        </p>

    </div>

</main><!-- /.container -->
<?php
require "footer.php";
?>

