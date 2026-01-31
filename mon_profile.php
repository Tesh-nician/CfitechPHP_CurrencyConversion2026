<?php

$title = "Mon Profile";
$nav = "mon_profile";
//require "functions/authentification.php"; //maintenant dans header.php
session_start();
require "header.php";
require "appToken.php";


//session_unset();



if(!is_connected()){
    //Verification si pas connecté => login
    header("Location: ./login.php");
    exit;
}

?>
<h1>Bienvenue <?php
    echo $_SESSION['pseudo']; ?> </h1>
<br>




<h2>Historique de vos Conversions</h2>


<?php




//if $_SESSION['currencyRates] is not empty, get the list of currency rates from the API and store in  session variable:

if (empty($_SESSION['currencyRates'])) {

    $_SESSION['currencyRates'] = file_get_contents("https://openexchangerates.org/api/latest.json?app_id=$appToken");
    $_SESSION['currencyRates'] = json_decode($_SESSION['currencyRates'], true);

//    var_dump($_SESSION['currencyRates']);

    echo "<br>New JSON currency list loaded: <br>";

    foreach ($_SESSION['currencyRates']['rates'] as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }


}





//display the session lists listeChiffres1, listeChiffres2, listeResultats, listeOperateurs:

if (!empty($_SESSION['listeResultats'])): ?>
    <table style="width:100%; text-align:center;  background-color: ivory; color: black;">
        <thead>
        <tr style="background-color: sandybrown;">
            <th>Source</th>
            <th>Pays</th>
            <th>Nombre 2</th>
            <th>Destination</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['listeSources'] as $index => $valeur): ?>
            <tr>
                <td><?php echo $_SESSION['listeSources'][$index]; ?></td>
                <td><?php echo $_SESSION['listePays'][$index]; ?></td>
                <td><?php echo $_SESSION['listeDestinations'][$index]; ?></td>
                <td><?php echo $_SESSION['listeResultats'][$index]; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun calcul dans l'historique pour le moment.</p>
<?php endif; ?>

<br>


<?php
require "footer.php";
?>
