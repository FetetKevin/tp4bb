<?php
session_start();

include('config.php');

// On démarre la session

// On n'effectue les traitement qu'à la condition que
// les informations aient été effectivement postées
if (isset($_POST) && (!empty($_POST['login'])) && (!empty($_POST['pass'])) ) {
    $login =  $_POST['login'];
    $pass = $_POST['pass'];

    // On va chercher le mot de passe afférent à ce login
    $sql = "SELECT `id_user`,`nom`, `prenom`,`email`, `motDePasse`,`roles_id_role`, `id_role`,`nom_role` 
            FROM `users` 
            LEFT JOIN `roles` 
            ON users.roles_id_role = roles.id_role 
            WHERE motDePasse = '$pass' AND email = '$login'";
    $req = mysqli_query($link,$sql) or die('Erreur SQL : <br/>'.$sql);

    // On vérifie que l'utilisateur existe bien
    if (mysqli_num_rows($req) > 0) {
        $data = mysqli_fetch_assoc($req);

        // On vérifie que son mot de passe est correct
        if ($_POST['login'] == $data['email'] && $_POST['pass'] == $data['motDePasse']) {
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $data['email'];
            $_SESSION['motDePasse'] = $data['motDePasse'];
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['prenom'] = $data['prenom'];
            $_SESSION['nom_role'] = $data['nom_role'];
            header("Location:index.php");
        }
    }
}else{
    $_SESSION['logged'] = false;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bac Blanc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/nbpcss.css" rel="stylesheet" />
    <!-- ----- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="http://orig04.deviantart.net/74de/f/2012/155/d/1/4chan_logo_hq_by_michaudotcom-d529rdh.png" type="image/x-icon" />
</head>


<body>

<?php include ('navbar.php'); ?>




<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-xs-12 col-md-offset-2" id="panelLogin">
                <h4><span>Connectez-vous !</span></h4>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" role="form" method="post" action="login.php" id="formuLogin">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="login" placeholder="exemple@domain.com" value="<?php //echo htmlspecialchars($_POST['email']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="pass" placeholder="Mot de passe" value="<?php //echo htmlspecialchars($_POST['nom']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="connection" name="connection" type="submit" value="Connexion" class="btn btn-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


</body>
</html>


