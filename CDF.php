<?php
$nav = "cdf";
$title = "CDF";
require "header.php";
include "functions/functionsMath.php";
include "assets/model/Conversion.php";
session_start();

//Normalement ceci est chargé aprés login dans mon_profile.php.
//Ceci obliqe les naifs de partager leur emails, mwahaha.
if (empty($_SESSION['currencyRates'])) {

    echo "<br><h2>Currency list is not loaded: you must first login!!! <br></h2>";
}


?>

<!--Formulaire 1-->

<h1 style="text-align: center">Conversion entre EUR et CDF</h1>
<?php
if(isset($_POST['nombre1'])):
    if (is_numeric($_POST['nombre1'])) :
        //convertir le chiffre de EUR en CDF:

        $result = convertEURtoCDF($_POST['nombre1']);

        //initialiser la liste si existe pas:
        if(!isset($_SESSION['listeAdditions'])){
            $_SESSION['listeAdditions'] = [];
        }



        //rajouter le source, le resultat et le pays dans le tableau de tous les conversions

        //initialiser la liste des conversions s'il n'existe pas:
        if(!isset($_SESSION['listeConversions'])){
            $_SESSION['listeConversions'] = [];
        }


        //ajouter cette nouvelle conversion dans la liste:

        $_SESSION['listeConversions'][] = new Conversion($_POST['nombre1'], "EUR=>CDF", $result );


        ?>



    <?php else: ?>
        Vous n'avez pas introduit une valeur numerique!
    <?php
    endif;
endif;?>
<form action="CDF.php" method="POST" style="display: flex; flex-direction:row; justify-content: center;">

    <input type="number" name="nombre1" placeholder="EUR">

    <button type="submit">Convertir EUR => CDF</button>
    <div style="min-width: 180px; padding: 10px 12px; border: 2px solid grey; color: black; background-color: white">
        <?php echo $result." CDF" ?>
    </div>

</form>

<!--Formulaire 2-->
<br><br>
<h1 style="text-align: center">Conversion entre CDF et EU</h1>
<?php
if(isset($_POST['nombre2'])):
    if (is_numeric($_POST['nombre2'])) :
        //convertir le chiffre de CDF en EUR:

        $result2 = convertCDFtoEUR($_POST['nombre2']);

        //initialiser la liste si existe pas:
        if(!isset($_SESSION['listeConversions'])){
            $_SESSION['listeConversions'] = [];
        }
        //rajouter le source, le resultat et le pays dans le tableau de tous les conversions

        //initialiser la liste des conversions s'il n'existe pas:
        if(!isset($_SESSION['listeConversions'])){
            $_SESSION['listeConversions'] = [];
        }


        //ajouter cette nouvelle conversion dans la liste:

        $_SESSION['listeConversions'][] = new Conversion($_POST['nombre2'], "CDF=>EUR", $result2 );




        ?>



    <?php else: ?>
        Vous n'avez pas introduit une valeur numerique!
    <?php
    endif;
endif;?>
<form action="CDF.php" method="POST" style="display: flex; flex-direction:row; justify-content: center;">


    <input type="number" name="nombre2" placeholder="CDF">

    <button type="submit">Convertir CDF => EUR</button>
    <div style="min-width: 180px; padding: 10px 12px; border: 2px solid grey; color: black; background-color: white">
        <?php echo isset($result2)? $result2." EUR":'0 EUR'; ?>
    </div>

</form>

<?php
require "footer.php";
?>
