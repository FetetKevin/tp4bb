<?php
session_start();
include('config.php');
if($_SESSION['logged'] && $_SESSION['nom_role'] == "admin") {
}
else {
    header('Location: index.php?notadmin');
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
    <!-- JS : TRIER LES VIDEOS -->
    <script type="text/javascript" src="assets/js/tri_page_videos.js"></script>
    <script src="assets/js/placeholderTypewriter.js"></script>
</head>

<body>
<?php include ('navbar.php'); ?>
<?php include ('navbarAdmin.php'); ?>

<div class="container" style="background: white;">
    <div class="row">
        <h2 class="page-header text-center">Ajoutez un Utilisateur !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<div class="container" style="background: white;border-bottom: 1px solid black;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="post" action="traitementAjoutAdmin.php" id="formuLogin">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lienNom" id="nom" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lienPrenom" id="prenom" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="lienEmail" id="email" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lienMotDePasse" id="mdp" value="">
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <?php
                    $sql= "SELECT * FROM roles";
                    $req = $link->query($sql);

                    // on envoie la requête
                    while ($row = mysqli_fetch_object($req)) {
                        ?>
                        <label class="btn btn-danger checked">
                            <input type="radio" name="role[]" value="<?= $row->id_role;?>"> <?= $row->nom_role;?>
                        </label>
                        <?php
                    }
                    ?>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="ajouter" name="ajouter" type="submit" value="S'enregistrer" class="btn btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include('listUsers.php'); ?>
<script src="dynamicplaceholder.js"></script>

</body>
</html>
