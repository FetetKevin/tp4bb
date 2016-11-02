<div class="container">
    <div class="row">
        <h2 class="page-header text-center">Liste des Categories !</h2>
    </div>
</div><!-- fin container -->

<?php

/**********
Variables qui contiennent les noms des champs du tableau :
@tableHeading : pour l'entete ( c'est les champs de la table User)
@tableBody : pour les informations du tableau (depuis le base de donnée) donc dans un wile ou foreach
 **********/
$tableHeading =array('id_categorie',
    'nom_categorie');
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
$roles = "SELECT  * FROM categories";
//send query
$reponse = mysqli_query($link, $roles);
if(mysqli_num_rows($reponse)>0){
    //Ajout dans un tableau neuf pour lafficher avec la méthode tableBody
    while($row = mysqli_fetch_assoc($reponse)){
        echo "<tr>";//ouvre une ligne
        echo "<td>".$row['id_categorie']."</td>";
        echo "<td>".$row['nom_categorie']."</td>";

        //Ici tu ajoute une icone supprimer dans la derniere cellule
        // onclick = fonction removeuser() pour supprimer et tu lui passe l'id de l'utilisateur a supprimer
        $champSupprimer = '<td><a id="'.$row["id_categorie"].'" href="javascript:void(0)" onclick="removeUser('.$row["id_categorie"].')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';
        echo $champSupprimer;

        echo "</tr>";//ferme la ligne
    }
}

echo "</tbody>";//tableau body fin
echo "</table>";//FIN DU TABLEAU
echo "</div>"; //Fin container
?>

</body>

<script type="text/javascript">
    // JQUERY AJAX SUPPRIMER USER EN JQUERY

    var id_categorie=null;

    //fonction appelée quand tu cliques sur supprimer dans le tableau
    function removeUser(id_categorie){

        console.log('id categorie :'+id_categorie);
        //Jquery ajax pour supprimer user
        $.ajax({
            url: 'supprimer_categorie.php',//lien vers le script php
            type: 'GET',//Methode
            data: 'id_categorie='+id_categorie,
            success: function(resultat){//si c'est ok
                //tu selectionne le tableau
                // et before c'est avant le tableau tu mets le resultat de la query supprimer user
                // dans supprimer_user.php c'est ce qui est dans $reponse qui est affiché
                $('#table').before(resultat);

            }
        });
    };

</script>