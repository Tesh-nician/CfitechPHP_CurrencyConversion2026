<!doctype html>
<html lang="en">

<?PHP
require_once "functions/authentification.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>
        <?php
        if(isset($title)):
            echo $title;
        else:
            echo "Mon site de PHP";
        endif
        ?>
    </title>

<!--    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">-->

    <!-- Bootstrap core CSS -->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="/assets/css/projet_conversion.css" rel="stylesheet">


</head>

<body>
<!--<nav class="navbar navbar-expand-md  bg-dark mb-4" style="border-radius: 10px;color: gold; opacity:0.8">-->
<!---->
<!---->
<!--        <ul class="navbar-nav mr-auto" >-->
<!--            <li class="nav-item --><?php //if($nav === "index.php"): ?><!--active --><?php //endif ?><!--">-->
<!--                <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            <li class="nav-item --><?php //if($nav === "reset_sessions.php"): ?><!--active --><?php //endif ?><!--">-->
<!--                <a class="nav-link" href="reset_sessions.php">Reset Sessions</a>-->
<!--            </li>-->
<!--            <li class="nav-item --><?php //if($nav === "session_actuelle.php"): ?><!--active --><?php //endif ?><!--">-->
<!--                <a class="nav-link" href="session_actuelle.php">Session Actuelle</a>-->
<!--            </li>-->
<!--            <li class="nav-item --><?php //if($nav === "pagemysterieuse.php"): ?><!--active --><?php //endif ?><!--">-->
<!--                <a class="nav-link" href="pagemysterieuse.php">Page Mysterieuse</a>-->
<!--            </li>-->
<!--            <li class="dropdown"  >-->
<!--                    <a class="nav-link dropbtn" > Conversions</a>-->
<!--                    <div class="dropdown">-->
<!---->
<!--                        <div class="dropdown-content">-->
<!---->
<!--                            <a class="drop-link" href="USD.php" >EUR/USD</a>-->
<!--                            <a class="drop-link" href="JPY.php">EUR/JPY</a>-->
<!--                            <a class="drop-link" href="CDF.php">EUR/CDF</a>-->
<!--                            <a class="drop-link" href="AED.php">EUR/AED</a>-->
<!--                            <a class="drop-link" href="CHF.php">EUR/CHF</a>-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!---->
<!--            </li>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--            <li class="nav-item --><?php //if($nav === "mon_profile"): ?><!--active --><?php //endif ?><!--">-->
<!--                <a class="nav-link" href="./mon_profile.php">Mon Profile</a>-->
<!--            </li>-->
<!---->
<!---->
<!--        </ul>-->
<!---->
<!--        <ul class="navbar-nav">-->
<!---->
<!--            --><?php //if(!($_SESSION['connected'])): ?>
<!--            <li class="nav-item --><?php //if ($nav === "login"): ?><!-- active --><?php //endif ?><!--">-->
<!--                <a class="nav-link" href="login.php">Login</a>-->
<!--            </li>-->
<!---->
<!--            --><?php //else: ?>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="logout.php">Logout</a>-->
<!--            </li>-->
<!--            --><?php //endif; ?>
<!--        </ul>-->
<!---->
<!---->
<!---->
<!---->
<!--    </div>-->
<!--</nav>-->

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" style="border-radius: 10px; color: gold; opacity:0.8">

    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($nav === "index.php"): ?>active<?php endif ?>" href="index.php" aria-current="page">
                        Acceuil <span class="visually-hidden">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($nav === "reset_sessions.php"): ?>active<?php endif ?>" href="reset_sessions.php">
                        Reset Sessions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($nav === "session_actuelle.php"): ?>active<?php endif ?>" href="session_actuelle.php">
                        Session Actuelle
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($nav === "pagemysterieuse.php"): ?>active<?php endif ?>" href="pagemysterieuse.php">
                        Page Mysterieuse
                    </a>
                </li>

                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        Conversions
                    </a>
                    <ul class="dropdown-menu" style="border-radius: 20px; background-image: url('/assets/images/dinar.jpg');background-size: cover;">
                        <li><a class="dropdown-item" href="USD.php">EUR/USD</a></li>
                        <li><a class="dropdown-item" href="JPY.php">EUR/JPY</a></li>
                        <li><a class="dropdown-item" href="CDF.php">EUR/CDF</a></li>
                        <li><a class="dropdown-item" href="AED.php">EUR/AED</a></li>
                        <li><a class="dropdown-item" href="CHF.php">EUR/CHF</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($nav === "mon_profile.php"): ?>active<?php endif ?>" href="./mon_profile.php">
                        Mon Profile
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <?php if(!($_SESSION['connected'])): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nav === "login.php"): ?>active<?php endif ?>" href="login.php">Login</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>