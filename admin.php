<?php
session_start();
include('config.php');
if($_SESSION['logged'] && $_SESSION['nom_role'] == "admin") {
}
else {
    header('Location: index.php?notadmin');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bac Blanc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/nbpcss.css" rel="stylesheet" />
    <!-- ----- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="http://orig04.deviantart.net/74de/f/2012/155/d/1/4chan_logo_hq_by_michaudotcom-d529rdh.png" type="image/x-icon" />
</head>

<body>

<?php include('navbar.php'); ?>
<?php include('navbarAdmin.php'); ?>

<br>
<br>

<h1>BIENVENU DANS L'ADMIN AYY LMAO</h1>


<?php
/***** PETIT TUTO POUR KNAB *****/

/*****
 * On commence ici !
 * Tout d'abord penses � utiliser var_dump($variable) quand tu sais pas pour t'aider � d�boger
 * Creation d'un objet 'helper' pour ton tableau (pas oblig� de l'utiliser) !!
 ***/
//Cr�ation objet Html (helper) :
class Html{

    // Une fonction (m�thode) pour cr�er L'entete du tableau :
    public function tableHeader($champsEntete){

        //Ici on affiche les champs du tableau : entete
        $i=0;
        $tailleChamps = count($champsEntete);

        echo "<table class='table table-bordered table-responsive table-hover'>";
        echo "<thead><tr>";

        //boucle
        for( $i; $i < $tailleChamps; $i++)
        {  ?>
            <!-- pour chaque champs afficher -->
            <th><?=$champsEntete[$i]?></th>
        <?php }

        echo "</tr></thead>";
    }//Fin Table Header


    // Une fonction (m�thode) pour cr�er :
    public function tableBody($usersToTableBody){
        echo "<tbody>";

        $i=0;
        $nbrUsers = count( $usersToTableBody );
        for( $i = 0; $i < $nbrUsers; $i++){
            echo "<tr>";
            foreach ($usersToTableBody[$i] as $key=>$value){
                echo "<td>$value</td>";
            }
            //Ici tu ajoute le boutton supprimer dans la derniere cellule
            // Tu lui donnes l'id de l'user a supprimer
            $supprimer = '<td><a id="'.$usersToTableBody[$i]["id_user"].'" href="javascript:void(0)" onclick="removeUser(this)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';
            echo $supprimer;
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

    }//Fin Table Body

}//Fin objet (helper tableau)
/***************** FIN OBJET HTML ********************/
?>


<?php
/****************** DEBUT BODY ************************/

//Connection Bdd
$link = mysqli_connect('localhost','knab','knab','tp4bb');

/********
Tu affiches ici les champs de la table users pour t'y rep�rer plus facilement :
 * @id_user (INT)
 * @nom (VARCHAR)
 * @prenom (VARCHAR)
 * @email (VARCHAR)
 * @motDePasse (VARCHAR)
 * @roles_id_role (INT)
 *******/
//On r�cup�re tous les champs de la table users
$users = "SELECT  * FROM users";
//send query
$reponse = mysqli_query($link, $users);
$usersToTableBody = array();
if(mysqli_num_rows($reponse)>0){
    //Ajout dans un tableau neuf pour lafficher avec la m�thode tableBody
    while($row = mysqli_fetch_assoc($reponse)){
        $usersToTableBody[] = $row;
    }

}
?>


<?php
/** Instanciation de l'objet Html **/
$Html = new Html();

/**********
Variables qui contiennent les noms des champs du tableau :
@tableHeading : pour l'entete ( c'est les champs de la table User)
@tableBody : pour les informations du tableau (depuis le base de donn�e) donc dans un wile ou foreach
 **********/
$tableHeading =array('id_user','nom',
    'prenom','email',
    'motDePasse','roles_id_role');
// Ajouter le champ supprimer dans l'entete du tableau
$tableHeading[]='supprimer';

//tableau vide : informations depuis  la bdd
$tableBody =array();

var_dump($tableHeading);
var_dump($usersToTableBody);

echo "<div class='container'>";
echo $Html->tableHeader($tableHeading);
echo $Html->tableBody($usersToTableBody);
echo "</div>";
?>

</body>
</html>
