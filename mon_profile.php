<?php

$title = "Mon Profile";
$nav = "mon_profile";
//require "functions/authentification.php"; //maintenant dans header.php
session_start();
require "header.php";


//session_unset();



if(!is_connected()){
    //Verification si pas connecté => login
    header("Location: ./login.php");
}

?>
<h1>Bienvenue <?php
    echo $_SESSION['pseudo']; ?> </h1>
<br>




<h2>Historique de vos Conversions</h2>


<?php


//if $_SESSION['currencyRates] is not empty, get the list of currency rates from the API and store in  session variable:

if (empty($_SESSION['currencyRates'])) {

    $_SESSION['currencyRates'] = file_get_contents("https://openexchangerates.org/api/latest.json?app_id=fdc59c41cdb04e6e908bb996153cc925");
    $_SESSION['currencyRates'] = json_decode($_SESSION['currencyRates'], true);

    var_dump($_SESSION['currencyRates']);

    echo "<br>New JSON currency list loaded: <br>";

    foreach ($_SESSION['currencyRates']['rates'] as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }
    echo "<br>End of foreach <br> ";

}




//$url = 'https://openexchangerates.org/api/latest.json?app_id=YOUR_APP_ID&base=EUR';
//
//$raw = file_get_contents($url);
//
//var_dump($raw);
//echo '<br>';
//
//if ($raw === false) {
//    $e = error_get_last();
//    var_dump($e);
//    exit;
//}
//
//if ($raw === false) {
//    echo 'HTTP fetch failed (file_get_contents returned false).<br>';
//    exit;
//}
//
//$data = json_decode($raw, true);
//
//var_dump($data);
//echo '<br>json_last_error_msg(): ' . json_last_error_msg() . '<br>';
//
//if (!is_array($data) || empty($data['rates'])) {
//    echo 'No rates found. The API likely returned an error payload or different structure.<br>';
//    exit;
//}
//
//foreach ($data['rates'] as $k => $v) {
//    echo $k . ' = ' . $v . '<br>';
//}


//display the session lists listeChiffres1, listeChiffres2, listeResultats, listeOperateurs:

if (!empty($_SESSION['listeChiffres1'])): ?>
    <table style="width:100%; text-align:center;  background-color: ivory; color: black;">
        <thead>
        <tr style="background-color: sandybrown;">
            <th>Nombre 1</th>
            <th>Opérateur</th>
            <th>Nombre 2</th>
            <th>Résultat</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['listeChiffres1'] as $index => $valeur): ?>
            <tr>
                <td><?php echo $_SESSION['listeChiffres1'][$index]; ?></td>
                <td><?php echo $_SESSION['listeOperateurs'][$index]; ?></td>
                <td><?php echo $_SESSION['listeChiffres2'][$index]; ?></td>
                <td><?php echo $_SESSION['listeResultats'][$index]; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun calcul dans l'historique pour le moment.</p>
<?php endif; ?>

<br>

<!-- start slipsum code -->

<h2>I can do that</h2>
<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>

<h2>I'm serious as a heart attack</h2>
<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>

<h2>Uuummmm, this is a tasty burger!</h2>
<p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>

<h2>Hold on to your butts</h2>
<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.  </p>

<h2>I'm serious as a heart attack</h2>
<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>

<!-- end slipsum code -->
<?php
require "footer.php";
?>
