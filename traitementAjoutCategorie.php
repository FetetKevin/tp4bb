<!-- FONCTION QUI AJOUTE UN CATEGORIE --><!-- FONCTION QUI AJOUTE UN CATEGORIE --><!-- FONCTION QUI AJOUTE UN CATEGORIE --><!-- FONCTION QUI AJOUTE UN CATEGORIE -->
<?php

include('config.php');

if (!empty($_POST) && isset($_POST['categorie'])) {
    $categorie = $_POST['categorie'];


    $req = "INSERT INTO `categories`(`nom_categorie`) VALUES ('" . $categorie . "')";


}


if (mysqli_query($link, $req)) {
    echo '<center><p class=\'text-danger\'>Ajout effectué :)</p></center>';
    header('Location: admin.php?catajoutee');
} else {
    echo "Error: " . $req . "<br>" . mysqli_error($link);
    header('Location: admin.php?error');
}


mysqli_close($link);



?>
<!-- FONCTION QUI AJOUTE UN CATEGORIE --><!-- FONCTION QUI AJOUTE UN CATEGORIE --><!-- FONCTION QUI AJOUTE UN CATEGORIE --><!-- FONCTION QUI AJOUTE UN CATEGORIE -->