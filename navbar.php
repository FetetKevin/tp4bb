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
                <li><a href="formuAjoutUser.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                <?php

                if ($_SESSION['logged']) {
                    echo '<li><a href = "deco.php" ><span class="glyphicon glyphicon-log-in" ></span > Se deconnecter</a ></li>';
                }
                else {
                    echo '<li><a href = "login.php" ><span class="glyphicon glyphicon-log-in" ></span > Connexion</a ></li>';
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
