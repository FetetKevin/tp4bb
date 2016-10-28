<!-- FONCTION QUI AJOUTE UN ROLE --><!-- FONCTION QUI AJOUTE UN ROLE --><!-- FONCTION QUI AJOUTE UN ROLE --><!-- FONCTION QUI AJOUTE UN ROLE -->
<?php

include('config.php');

if (!empty($_POST) && isset($_POST['role'])) {
    $role = $_POST['role'];


    $req = "INSERT INTO `roles`(`nom_role`) VALUES ('" . $role . "')";


}


if (mysqli_query($link, $req)) {
    echo '<center><p class=\'text-danger\'>Ajout effectué :)</p></center>';
} else {
    echo "Error: " . $req . "<br>" . mysqli_error($link);
}
//header('Location: index.php');

mysqli_close($link);



?>
<!-- FONCTION QUI AJOUTE UN ROLE --><!-- FONCTION QUI AJOUTE UN ROLE --><!-- FONCTION QUI AJOUTE UN ROLE --><!-- FONCTION QUI AJOUTE UN ROLE -->
