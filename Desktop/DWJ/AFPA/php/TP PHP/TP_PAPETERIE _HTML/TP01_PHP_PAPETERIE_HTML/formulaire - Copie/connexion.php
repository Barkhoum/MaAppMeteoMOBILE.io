<!-- <?php
require 'function.php';

$page = 'connexion';
if (!empty($_POST)) {

    $errors = array();

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Vous pseudo n'est pas valide(alphanumérique)";
    }
    if(empty($_POST['password'])){
        $errors['password'] = "vous devez rentrer un mot de passe valide";
    }
    debug($errors);
}
?> -->
<!DOCTYPE html>
<!--
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier d'affichage des produits Papeterie de l'application TP_Papeterie
-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>
        210_00_TP_Papeterie DWWM
    </title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/papeterie.css" type="text/css" rel="stylesheet" />
    <style>
        input[type=number] {
            width: 45px;
        }
    </style>
    <script src="dist/js/jquery-3.4.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</head>

<body>
    <div class='wrap'>
        <?php
        require 'pages\_entete.php';
        require 'pages\_nav.php';
        ?>
        <main class="container">
            <h2>Formulaire de contact </h2>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="" class="form-label">Login</label>
                    <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="password" >
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
    </div>
    </div>
    <?php
    require 'pages\_footer.php';
    ?>

</body>

</html>