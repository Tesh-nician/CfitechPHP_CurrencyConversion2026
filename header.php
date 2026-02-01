<!doctype html>
<html lang="en">

<?PHP
require_once "functions/authentification.php";

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/assets/css/projet_conversion.css" rel="stylesheet">


</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">


        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($nav === "index"): ?>active <?php endif ?>">
                <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if($nav === "reset_sessions"): ?>active <?php endif ?>">
                <a class="nav-link" href="reset_sessions.php">Reset Sessions</a>
            </li>
            <li class="nav-item <?php if($nav === "session_actuelle"): ?>active <?php endif ?>">
                <a class="nav-link" href="session_actuelle.php">Session Actuelle</a>
            </li>
            <li class="dropdown">
                    <a class="nav-link dropbtn" > Conversions</a>
                    <div class="dropdown">

                        <div class="dropdown-content">

                            <a class="drop-link" href="USD.php" >EUR/USD</a>
                            <a class="drop-link" href="JPY.php">EUR/JPY</a>
                            <a class="drop-link" href="CDF.php">EUR/CDF</a>
                            <a class="drop-link" href="AED.php">EUR/AED</a>
                            <a class="drop-link" href="CHF.php">EUR/CHF</a>

                        </div>

                    </div>

            </li>






            <li class="nav-item <?php if($nav === "mon_profile"): ?>active <?php endif ?>">
                <a class="nav-link" href="./mon_profile.php">Mon Profile</a>
            </li>


        </ul>

        <ul class="navbar-nav">
            <li class="nav-item <?php if ($nav === "login"): ?> active <?php endif ?>">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>




    </div>
</nav>
