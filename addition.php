<?php
session_start();
$nav = "addition";
$title = "Addition";
require "header.php";
include "functions/functionsMath.php";




?>

<h1>Addition</h1>
<?php
if(isset($_POST['nombre1'], $_POST['nombre2'])):
    if (is_numeric($_POST['nombre1']) && is_numeric($_POST['nombre2'])) :
        //creeer un string avec les deux chiffres et le resultat:

        $somme = addition($_POST['nombre1'], $_POST['nombre2']);
        $resultat = $_POST['nombre1'] . " + " . $_POST['nombre2'] . " = " . $somme;



        //initialiser la liste si existe pas:
    if(!isset($_SESSION['listeAdditions'])){
        $_SESSION['listeAdditions'] = [];
    }
        //rajouter le resultat dans la liste, ça sera montré en haut pour
        // montrer la historique. Petit exercice pour prepare le grand travaille.


    $_SESSION['listeAdditions'][] = $resultat;
    //display all results from the listeAdditions:

    foreach($_SESSION['listeAdditions'] as $resultat){
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
        $_SESSION['listeOperateurs'][] = "+";


    ?>

        <p style = "color:red">Le resultat = <?PHP echo ($_POST['nombre1']+$_POST['nombre2']) ?></p>

    <?php else: ?>
        Vous n'avez pas introduit des valeurs numeriques!
    <?php
        endif;
    endif;?>
    <form action="addition.php" method="POST">
        <input type="number" name="nombre1" placeholder="Uniquement des chiffres!'">
        <input type="number" name="nombre2" placeholder="Uniquement des chiffres!'">
    <button type="submit">Additionér</button>
</form>


<?php
require "footer.php";
?>
