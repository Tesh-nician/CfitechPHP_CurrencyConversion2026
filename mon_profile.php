<?php

$title = "Mon Profile";
$nav = "mon_profile";
//require "functions/authentification.php"; //maintenant dans header.php

require "header.php";
include "appToken.php";
include "assets/model/Conversion.php";
session_start();

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

<?php


//si $_SESSION['currencyRates] est vide, obtien la liste de currency rates du API et flanque-le dans une session variable

if (empty($_SESSION['currencyRates'])) {

    $_SESSION['currencyRates'] = file_get_contents("https://openexchangerates.org/api/latest.json?app_id=$appToken"); //erreur dans l'IDE, pas dans le code!
    $_SESSION['currencyRates'] = json_decode($_SESSION['currencyRates'], true);

//    var_dump($_SESSION['currencyRates']); // pour debugger
//montre la nouvelle liste de currency rates (pour mieux demonstrer le code).


    echo "<br>New JSON currency list loaded: <br>";

    foreach ($_SESSION['currencyRates']['rates'] as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }


}

?>




<h2>Historique de vos Conversions</h2>


<?php









//display the session lists listeChiffres1, listeChiffres2, listeResultats, listeOperateurs:

if (!empty($_SESSION['listeConversions'])): ?>
    <table style="width:100%; text-align:center;  background-color: ivory; color: black;">
        <thead>
        <tr style="background-color: sandybrown;">
            <th>Montant</th>
            <th>Type de conversion</th>
            <th>Resultat</th>
            <th>Date du conversion</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['listeConversions'] as $uneConversion): ?>
            <tr>
                <td><?php echo number_format($uneConversion->getSource(),2); ?></td>
                <td><?php echo $uneConversion->getPays() ?></td>
                <td><?php echo number_format($uneConversion->getResult(),2) ?></td>
                <td><?php echo $uneConversion->getDate()->format("Y-m-d H:i:s") ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune conversion dans l'historique pour le moment.</p>
<?php endif; ?>

<br>


<?php
require "footer.php";
?>
