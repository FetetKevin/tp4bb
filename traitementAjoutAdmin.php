<!-- FONCTION QUI AJOUTE UN ADMIN --><!-- FONCTION QUI AJOUTE UN ADMIN --><!-- FONCTION QUI AJOUTE UN ADMIN --><!-- FONCTION QUI AJOUTE UN ADMIN -->
<?php

include('config.php');

if (!empty($_POST) && isset($_POST['lienNom']) && isset($_POST['lienPrenom']) && isset($_POST['lienEmail']) && isset($_POST['lienMotDePasse'])) {
    $lienNom = $_POST['lienNom'];
    $lienPrenom = $_POST['lienPrenom'];
    $lienEmail = $_POST['lienEmail'];
    $lienMotDePasse = $_POST['lienMotDePasse'];

foreach ($_POST['role'] as $valeur) {
    $sql = "INSERT INTO `users`(`nom`, `prenom`, `email`, `motDePasse`, `roles_id_role`) VALUES ('" . $lienNom . "','" . $lienPrenom . "','" . $lienEmail . "','" . $lienMotDePasse . "','" . $valeur . "')";
}
    if (!$_POST['role']) {
        echo "Aucune checkbox n'a été cochée";
    }

}


if (mysqli_query($link, $sql)) {
    header('Location: formuAjoutAdmin.php?Useradded');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
    header('Location: formuAjoutAdmin.php?Usererror');
}


mysqli_close($link);



?>
<!-- FONCTION QUI AJOUTE UN ADMIN --><!-- FONCTION QUI AJOUTE UN ADMIN --><!-- FONCTION QUI AJOUTE UN ADMIN --><!-- FONCTION QUI AJOUTE UN ADMIN -->