<style type="text/css">
    .Navbar{
        margin: 10px;
    }
</style>


    <div class="Navbar">
        <nav role="navigation" class="navbar navbar-default">
            <!-- Pour un affichage sur les mobiles -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Bac Blanc</a>
            </div>
            <!-- Collection de liens de navigatioon -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Liste des Videos</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if($_SESSION['logged'] && $_SESSION['nom_role'] == "admin") {
                        echo '<li ><a href = "admin.php" > Espace Admin </a ></li >';
                    }
                    ?>
                    <?php
                    if($_SESSION['logged']) {
                    }
                    else {
                        echo '<li ><a href = "formuAjoutUser.php" ><span class="glyphicon glyphicon-user" ></span > Inscription</a ></li >';
                    }
                    ?>
                    <?php

                    if ($_SESSION['logged']) {
                        echo '<li><a href = "deco.php" ><span class="glyphicon glyphicon-log-in" ></span > Se deconnecter</a ></li>';
                    }
                    else {
                        //echo '<li><a href = "login.php" ><span class="glyphicon glyphicon-log-in" ></span > Connexion</a ></li>';
                        echo '<li class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-top: 8px;margin-right:3px;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span > Connexion</li>
<!-- Large modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
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
                    <div class="col-md-6">
                        <form class="form-horizontal" role="form" method="post" action="login.php" id="formuLogin">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="login" id="email3" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Mot de passe</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="pass" id="mdp3" value="">
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
        </div>
    </div>
</div>
';

                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>


<div>
<?php
if($_SESSION['logged']){
    echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' est connecté en tant que "' . $_SESSION['nom_role'] . '" .';
}else{
    echo "vous n'êtes pas connecté !";
}
//var_dump($_SESSION);
?>
</div>
<br>
<br>
