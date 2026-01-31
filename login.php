<?php
$nav = "login";
$title = "Login";
$erreur = null;
session_start();

// //solution 1
// session_start();
// if(isset($_SESSION['connected']) && $_SESSION['connected']){
//     header("Location: ./dashboard.php");
// }

//solution 2
require "./functions/authentification.php";
if (is_connected()){
    header("Location: mon_profile.php");
    exit;
}




if (!empty($_POST['pseudo']) && !empty($_POST['password'])){
    if ($_POST['pseudo'] == "jonathan" && $_POST['password'] == "cfitech"){
        $_SESSION['connected'] = true;
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: mon_profile.php");
        exit;

    }else {
        $erreur = "Identifiants incorrects !";
    }
}

require "header.php";


if ($erreur) : ?>
    <div class="alert alert-danger"> <?php echo $erreur ?> </div>
<?php endif; ?>
<div><center>

        <h1>Login</h1>

        <form action="./login.php" method="POST">
            <input type="text" name="pseudo" placeholder="Entrez votre pseudo">
            <br>
            <input type="password" name="password" placeholder="Entrez votre password">
            <br>
            <button type="submit" class="btn btn-primary">Se connecter</button>

        </form>
    </center>
</div>


<?php
require "footer.php";
?>
