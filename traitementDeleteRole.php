<!-- FONCTION SERVANT A SUPPRIMER LE DERNIER ROLE --><!-- FONCTION SERVANT A SUPPRIMER LE DERNIER ROLE --><!-- FONCTION SERVANT A SUPPRIMER LE DERNIER ROLE -->
<?php

include('config.php');

if (!empty($_POST) && isset($_POST['supprimer'])) {
    $erase = "DELETE FROM `roles` ORDER BY id_role DESC LIMIT 1";
}

if (mysqli_query($link, $erase)) {
    echo '<center><p class=\'text-danger\'>Dernier role supprimé !</p></center>';
    header('Location: admin.php?roledelete');
} else {
    echo "Error: " . $erase . "<br>" . mysqli_error($link);
    header('Location: admin.php?error');
}


mysqli_close($link);


?>
<!-- FONCTION SERVANT A SUPPRIMER LE DERNIER ROLE --><!-- FONCTION SERVANT A SUPPRIMER LE DERNIER ROLE --><!-- FONCTION SERVANT A SUPPRIMER LE DERNIER ROLE -->