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

                    <div class="page1-card-text">
                        <h2> Project Manager</h2>
                        <p style="font-size: medium">  (moi)</p>
                    </div>

                    <div class="page1-card-image">
                        <img src="/assets/images/jonathan3.jpg" alt="jonathan" style="width: 100%">
                    </div>
                </div>


            </div>

            <div class="page1-card-container">

                <div class="page1-card">

                    <div class="page1-card-text">
                        <h2> Graphic Design </h2><br> <p style="font-size: medium">  (inspiré par les rideaux et coussins de ma femme)</p>
                    </div>

                    <div class="page1-card-image">
                        <img src="/assets/images/curtains.jpeg" alt="jonathan" style="width: 100%">
                    </div>
                </div>


            </div>

            <div class="page1-card-container">

                <div class="page1-card">

                    <div class="page1-card-text">
                        <h2> Frontend/backend</h2>
                        <p style="font-size: medium">  (moi)</p>
                    </div>

                    <div class="page1-card-image">
                        <img src="/assets/images/jonathan1.png" alt="jonathan" style="width: 100%">
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








    </div>

</main><!-- /.container -->
<?php
require "footer.php";
?>

