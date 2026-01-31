<?php
session_start();




function convertEURtoUSD(float $eur):float{
    return $eur/$_SESSION['currencyRates']['rates']['EUR'];
}

function convertUSDtoEUR(float $usd):float{
    return $usd*$_SESSION['currencyRates']['rates']['EUR'];
}

function convertEURtoJPY(float $eur):float{

    $usd = convertEURtoUSD($eur);
    $jpy = $usd*$_SESSION['currencyRates']['rates']['JPY'];
    return $jpy;
}

function convertJPYtoEUR(float $jpy):float{
    $usd = $jpy*$_SESSION['currencyRates']['rates']['JPY'];
    $eur = convertUSDtoEUR($usd);
    return $eur;
}

function convertEURtoCHF(float $eur):float{
    $usd = convertEURtoUSD($eur);
    $chf = $usd*$_SESSION['currencyRates']['rates']['CHF'];
    return $chf;
}

function convertCHFtoEUR(float $chf):float{
    $usd = $chf*$_SESSION['currencyRates']['rates']['CHF'];
    $eur = convertUSDtoEUR($usd);
    return $eur;
}


function convertEURtoAED(float $eur):float{
    $usd = convertEURtoUSD($eur);
    $aed = $usd*$_SESSION['currencyRates']['rates']['AED'];
    return $aed;
}


function convertAEDtoEUR(float $aed):float{
    $usd = $aed*$_SESSION['currencyRates']['rates']['AED'];
    $eur = convertUSDtoEUR($usd);
    return $eur;
}




//mis en functionsDate.php, tentative solution pour footer qui disparaisse en additions, ...
//function date_aujourdhui():string{
//    return date('d/m/Y');
//}
//
//function time_aujourdhui():string{
//    return date('H:i:s');
//}







