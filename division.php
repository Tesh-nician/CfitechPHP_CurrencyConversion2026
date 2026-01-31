<?php
session_start();
$nav = "division";
$title = "Division";
require "header.php";
include "functions/functionsMath.php";



?>

<h1>Division</h1>
<?php

//Comme le nombre2 n'est pas encore attribué dans le formulaire, il donne toujours division par O erreur.
//Donc il faut rajouter un test pour verifier si le formulaire a ete soumis.

//if ($_SERVER['REQUEST_METHOD'] === 'POST'):  //https://www.w3schools.com/php/phptryit.asp?filename=tryphp_global_post

if(isset($_POST['nombre1'], $_POST['nombre2'])):
    if (is_numeric($_POST['nombre1']) && is_numeric($_POST['nombre2'])) :

        if($_POST['nombre2'] != 0):

        //creeer un string avec les deux chiffres et le resultat:

        $somme = division($_POST['nombre1'], $_POST['nombre2']);
        $resultat = $_POST['nombre1'] . " / " . $_POST['nombre2'] . " = " . $somme;



        //initialiser la liste si existe pas:
        if(!isset($_SESSION['listeDivisions'])){
            $_SESSION['listeDivisions'] = [];
        }
        //rajouter le resultat dans la liste, ça sera montré en haut pour
        // montrer la historique. Petit exercice pour prepare le grand travaille.


        $_SESSION['listeDivisions'][] = $resultat;
        //display all results from the listeAdditions:

        foreach($_SESSION['listeDivisions'] as $resultat){
            echo $resultat . "<br>";
        }


        //rajouter les chiffres, le resultat et l'operateur dans des tableaux

        //initialiser les listes si ils n'existe pas:
        if(!isset($_SESSION['listeChiffres1'])){
            $_SESSION['listeChiffres1'] = [];
        }

        if(!isset($_SESSION['listeChiffres2'])){
            $_SESSION['listeChiffres2'] = [];
        }

        if(!isset($_SESSION['listeResultats'])){
            $_SESSION['listeResultats'] = [];
        }

        if (!isset($_SESSION['listeOperateurs'])){
            $_SESSION['listeOperateurs'] = [];
        }

        //ajouter les valeurs dans les listes:

        $_SESSION['listeChiffres1'][] = $_POST['nombre1'];
        $_SESSION['listeChiffres2'][] = $_POST['nombre2'];
        $_SESSION['listeResultats'][] = $somme;
        $_SESSION['listeOperateurs'][] = "/";


        ?>


        <p style = "color:red">Le resultat = <?PHP echo ($_POST['nombre1']/ $_POST['nombre2']) ?></p>

    <?php else: ?>
            <h2> Noooooon! Jamais diviser par 0 !!!! </h2>
    <?php
    endif;
    endif; //fin du if pour verifier le division par 0
        else: ?>

            <h2>Vous n'avez pas introduit des valeurs numeriques!</h2>
<?php
endif;

//endif; //fin du if pour verifier si le formulaire a ete soumis.
// Prochaine fois je mets des {} :-(
    ?>
<form action="division.php" method="POST">
    <input type="number" name="nombre1" placeholder="Uniquement des chiffres!'">
    <input type="number" name="nombre2" placeholder="Uniquement des chiffres!'">
    <button type="submit">Division</button>
</form>


<?php
require "footer.php";
?>

