<div class="container">
    <div class="row">
        <h2 class="page-header text-center">Liste des utilisateurs !</h2>
    </div>
</div>

<?php

/**********
Variables qui contiennent les noms des champs du tableau :
@tableHeading : pour l'entete ( c'est les champs de la table User)
@tableBody : pour les informations du tableau (depuis le base de donnée) donc dans un wile ou foreach
 **********/
$tableHeading =array('id_user',
    'nom',
    'prenom',
    'email',
    'motDePasse',
    'roles_id_role');
// Ajouter le champ supprimer dans l'entete du tableau
$tableHeading[]='supprimer';

echo "<div class='container'>";

// PARTIE 1 ( LE HEADER DU TABLEAU)
//DEBUT DU TABLEAU
echo "<table id='table' class='table table-bordered table-responsive table-hover'>";
echo "<thead><tr>";	//debut tableau head
//Ici on affiche les champs du tableau : entete
$i=0;
$tailleChamps = count($tableHeading);
//boucle sur le tableau qui contient les noms des champs
for( $i; $i < $tailleChamps; $i++)
{  ?>
    <!-- pour chaque champs afficher -->
    <th><?=$tableHeading[$i]?></th>
<?php }
echo "</tr></thead>";	//fin tableau head


// PARTIE 2 (CE QUE CONTIENT LA BASE DE DONNEE)
echo "<tbody>";//tableau body debut

//On récupère tous les champs de la table users
$users = "SELECT  * FROM users";
//send query
$reponse = mysqli_query($link, $users);
if(mysqli_num_rows($reponse)>0){
    //Ajout dans un tableau neuf pour lafficher avec la méthode tableBody
    while($row = mysqli_fetch_assoc($reponse)){
        echo "<tr>";//ouvre une ligne
        echo "<td>".$row['id_user']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['motDePasse']."</td>";
        echo "<td>".$row['roles_id_role']."</td>";

        //Ici tu ajoute une icone supprimer dans la derniere cellule
        // onclick = fonction removeuser() pour supprimer et tu lui passe l'id de l'utilisateur a supprimer
        $champSupprimer = '<td><a id="'.$row["id_user"].'" href="javascript:void(0)" onclick="removeUser('.$row["id_user"].')">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';
        echo $champSupprimer;

        echo "</tr>";//ferme la ligne
    }
}

echo "</tbody>";//tableau body fin
echo "</table>";//FIN DU TABLEAU

echo "</div>"; //Fin container
?>

</body>



<script langage="javascript">
    // JS  SCRIPT SUPPRIMER USER EN JQUERY

    var id_user=null;

    //fonction appelée quand tu cliques sur supprimer dans le tableau
    function removeUser( id_user ){

        console.log('id utilisateur :'+id_user);
        //Jquery ajax pour supprimer user
        $.ajax({
            url: 'supprimer_user.php',//lien vers le script php
            type: 'GET',//Methode
            data: 'id_user='+id_user,
            success: function(resultat){//si c'est ok
                //tu selectionne le tableau
                // et before c'est avant le tableau tu mets le resultat de la query supprimer user
                // dans supprimer_user.php c'est ce qui est dans $reponse qui est affiché
                $('#table').before(resultat);

            }
        });
    };

</script>


<!--<?php
// FONCTION QUI SERT A REAFFICHER LES DONNEES DE LA BASE DE DONNEE
$requete = "SELECT `id_user`,`nom`, `prenom`,`email`, `motDePasse`,`roles_id_role`, `id_role`,`nom_role` 
            FROM `users` 
            LEFT JOIN `roles` 
            ON users.roles_id_role = roles.id_role
            ORDER BY `id_user`";
$exec = mysqli_query($link,  $requete);
$resultat= array();
while($row = mysqli_fetch_array($exec)) {
    $resultat[] = $row;
    ?>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                    <h4 style="color:red;">Nom :</h4> <?= $row['nom']; ?>
                    <h4 style="color:red;">Prenom :</h4> <?= $row['prenom']; ?>
                    <p style="color:red;">Email :</p> <?= $row['email']; ?>
                    <p style="color:red;">Mot de passe :</p> <?= $row['motDePasse']; ?>
                    <p style="color:red;">Role :</p> <?= $row['nom_role']; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    '<br>';
}
?> -->