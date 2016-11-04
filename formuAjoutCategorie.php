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
        <h2 class="page-header text-center">Ajoutez une Categorie !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<div class="container" style="background: white;border-bottom: 1px solid black;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="post" action="traitementAjoutCategorie.php" id="formuLogin">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nouvelle categorie</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="categorie" id="cat" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-1 col-md-offset-2">
                        <input id="ajouter" name="ajouter" type="submit" value="Ajouter" class="btn btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include('listCategories.php'); ?>
<script src="dynamicplaceholder.js"></script>

</body>
</html>