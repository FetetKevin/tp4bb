<?php
//AJAX ***


//Connection Bdd
$link = mysqli_connect('127.0.0.1','knab','knab','tp4bb');


if(isset($_GET['id_role'])&&!empty($_GET['id_role'])){

    $id_role = $_GET['id_role'];
}
$supprimer= "DELETE FROM roles WHERE id_role = $id_role";

if(mysqli_query($link,$supprimer)){

    $reponse= "ok c'est supprimé";
    echo $reponse;
}else{

    $reponse= "Erreur c'est pas supprimé";
    echo $reponse;
}

?>


