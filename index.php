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

            <div class="page1-card-container">

                <div class="page1-card">
                    <h2> Project Manager</h2>
                    <div class="page1-card-image">
                        <img src="assets/img/jonathan1.jpg" alt="jonathan">
                    </div>

                    <p></p>

                </div>

                <div class="page1-card">
                    <h2> Backend+Frontend Developer</h2>
                    <div class="page1-card-image">
                        <img src="assets/img/jonathan2.jpg" alt="jonathan">
                    </div>


                </div>


                <div class="page1-card">
                    <h2> Graphic Designer (quelle design?) </h2>

                    < <div class="page1-card-image">
                        <img src="assets/img/jonathan2.jpg" alt="jonathan">
                    </div>

                </div>


            </div>

            <h2>Objectifs du projét: </h2>

            <ol>

                <li>Utiliser les variables de session</li>
                <li>Utiliser un API, faire un lien avec une site externe</li>
                <li>Apprendre a gérer un ensemble de pages PHP et utilisér les techniques du POO </li>
                <li>Dévoiler les grands mystères de notre epoche</li>

            </ol>

        </div>






        </p>

    </div>

</main><!-- /.container -->
<?php
require "footer.php";
?>

