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
        <h1>Projet de Groupe PHP Conversion 2026</h1>
        <p class="subtitle">
            Membres du projet: </p>
        <p>
            <ul>
            <li>Paul</li>
            <li>Said</li>
            <li>Jonathan</li>
        </ul>




        </p>

    </div>

</main><!-- /.container -->
<?php
require "footer.php";
?>

