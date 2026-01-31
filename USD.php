<?php
session_start();
$nav = "usd";
$title = "USD";
require "header.php";
include "functions/functionsMath.php";

//Normalement ceci est chargé aprés login, mais just pour etre certain je charge de nouveau.
if (empty($_SESSION['currencyRates'])) {

echo "<br>Currency list is not loaded: you must first login!! <br>";
}


?>

<!--Formulaire 1-->

<h1 style="text-align: center">Conversion entre EUR et USD</h1>
<?php
if(isset($_POST['nombre1'])):
    if (is_numeric($_POST['nombre1'])) :
        //convertir le chiffre de EUR en USD:

        $result = convertEURtoUSD($_POST['nombre1']);

        //initialiser la liste si existe pas:
    if(!isset($_SESSION['listeAdditions'])){
        $_SESSION['listeAdditions'] = [];
    }
        //rajouter le resultat dans la liste, ça sera montré en haut pour
        // montrer la historique. Petit exercice pour prepare le grand travaille.


//    $_SESSION['listeDestinations'][] = $result;
//    //display all results from the listeAdditions:
//
//    foreach($_SESSION['listeAdditions'] as $resultat){
//        echo $resultat . "<br>";
//    }


    //rajouter le source, le resultat et le pays dans les tableaux

        //initialiser les listes si ils n'existe pas:
        if(!isset($_SESSION['listeSources'])){
            $_SESSION['listeSources'] = [];
        }

        if(!isset($_SESSION['listeDestinations'])){
            $_SESSION['listeDestinations'] = [];
        }



        if (!isset($_SESSION['listePays'])){
            $_SESSION['listePays'] = [];
        }

        //ajouter les valeurs dans les listes:

        $_SESSION['listeSources'][] = $_POST['nombre1'];
        $_SESSION['listeDestinations'][] = $result;

        $_SESSION['listePays'][] = "EUR => USD";


    ?>



    <?php else: ?>
        Vous n'avez pas introduit une valeur numerique!
    <?php
        endif;
    endif;?>
    <form action="USD.php" method="POST" style="display: flex; flex-direction:row; justify-content: center;">

        <input type="number" name="nombre1" placeholder="Uniquement des chiffres!'">

        <button type="submit">Convertir EUR => USD</button>
        <div style="min-width: 180px; padding: 10px 12px; border: 2px solid grey; color: black; background-color: white">
            <?php echo $result." USD" ?>
        </div>

    </form>

<!--Formulaire 2-->
 <br><br>
<h1 style="text-align: center">Conversion entre USD et EU</h1>
<?php
if(isset($_POST['nombre1'])):
    if (is_numeric($_POST['nombre1'])) :
        //convertir le chiffre de USD en EUR:

        $result = convertUSDtoEUR($_POST['nombre1']);

        //initialiser la liste si existe pas:
        if(!isset($_SESSION['listeAdditions'])){
            $_SESSION['listeAdditions'] = [];
        }
        //rajouter le resultat dans la liste, ça sera montré en haut pour
        // montrer la historique. Petit exercice pour prepare le grand travaille.


//    $_SESSION['listeDestinations'][] = $result;
//    //display all results from the listeAdditions:
//
//    foreach($_SESSION['listeAdditions'] as $resultat){
//        echo $resultat . "<br>";
//    }


        //rajouter le source, le resultat et le pays dans les tableaux

        //initialiser les listes si ils n'existe pas:
        if(!isset($_SESSION['listeSources'])){
            $_SESSION['listeSources'] = [];
        }

        if(!isset($_SESSION['listeDestinations'])){
            $_SESSION['listeDestinations'] = [];
        }



        if (!isset($_SESSION['listePays'])){
            $_SESSION['listePays'] = [];
        }

        //ajouter les valeurs dans les listes:

        $_SESSION['listeSources'][] = $_POST['nombre1'];
        $_SESSION['listeDestinations'][] = $result;

        $_SESSION['listePays'][] = "USD => EUR";


        ?>



    <?php else: ?>
        Vous n'avez pas introduit une valeur numerique!
    <?php
    endif;
endif;?>
<form action="USD.php" method="POST" style="display: flex; flex-direction:row; justify-content: center;">


    <input type="number" name="nombre1" placeholder="Uniquement des chiffres!'">

    <button type="submit">Convertir USD => EUR</button>
    <div style="min-width: 180px; padding: 10px 12px; border: 2px solid grey; color: black; background-color: white">
        <?php echo isset($result)? $result." EUR":'0 EUR'; ?>
    </div>

</form>

<?php
require "footer.php";
?>
