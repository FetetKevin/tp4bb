<!-- FONCTION SERVANT A AJOUTER UNE NOUVELLE VIDEO DANS LA BDD --><!-- FONCTION SERVANT A AJOUTER UNE NOUVELLE VIDEO DANS LA BDD --><!-- FONCTION SERVANT A AJOUTER UNE NOUVELLE VIDEO DANS LA BDD -->
<?php

include('config.php');


if (!empty($_POST) && isset($_POST['lienUrl']) && isset($_POST['lienTitre']) && isset($_POST['description'])) {
    $lienUrl = htmlspecialchars($_POST['lienUrl']);
    $lienTitre = htmlspecialchars($_POST['lienTitre']);
    $description = htmlspecialchars($_POST['description']);

    foreach ($_POST['categorie'] as $valeur) {
        $req = 'INSERT INTO `videos`(`url_video`, `titre_video`, `date_video`, `desc_video`, `categorie_video`) VALUES ("' . $lienUrl . '","' . $lienTitre . '",  NOW()  ,"' . $description . '","' . $valeur . '")';

    }
    if (!$_POST['categorie']) {
        echo "Aucune checkbox n'a été cochée";
    }



}

if (mysqli_query($link, $req)) {
    echo '<center><p class=\'text-danger\'>ALED</p></center>';
    header('Location: index.php?videoajoutee');
} else {
    echo "Error: " . $req . "<br>" . mysqli_error($link);
    header('Location: index.php?rip');
}


mysqli_close($link);

?>
<!-- FONCTION SERVANT A AJOUTER UNE NOUVELLE VIDEO DANS LA BDD --><!-- FONCTION SERVANT A AJOUTER UNE NOUVELLE VIDEO DANS LA BDD --><!-- FONCTION SERVANT A AJOUTER UNE NOUVELLE VIDEO DANS LA BDD -->
