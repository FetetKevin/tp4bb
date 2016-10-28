<!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE --><!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE --><!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE --><!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE -->
<?php

include('config.php');

if (!empty($_POST) && isset($_POST['supprimer'])) {
    $erase = "DELETE FROM `categories` ORDER BY id_categorie DESC LIMIT 1";
}

if (mysqli_query($link, $erase)) {
    echo '<center><p class=\'text-danger\'>Derniere categorie supprimée !</p></center>';
    header('Location: admin.php?catdelete');
} else {
    echo "Error: " . $erase . "<br>" . mysqli_error($link);
    header('Location: admin.php?error');
}


mysqli_close($link);


?>
<!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE --><!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE --><!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE --><!-- FONCTION SERVANT A SUPPRIMER LADERNIERE CATEGORIE -->