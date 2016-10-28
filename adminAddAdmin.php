<div class="container" style="background: white;">
    <div class="row">
        <h2 class="page-header text-center">Ajoutez un admin !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<div class="container" style="background: white;border-bottom: 1px solid black;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="post" action="traitementAjoutAdmin.php" id="formuLogin">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lienNom" placeholder="Jackson" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lienPrenom" placeholder="Michael" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="lienEmail" placeholder="exemple@domain.com" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lienMotDePasse" placeholder="MotDePasse" value="">
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <?php
                    $sql= "SELECT * FROM roles";
                    $req = $link->query($sql);

                    // on envoie la requête
                    while ($row = mysqli_fetch_object($req)) {
                        ?>
                        <label class="btn btn-danger checked">
                            <input type="radio" name="role[]" value="<?= $row->id_role;?>"> <?= $row->nom_role;?>
                        </label>
                        <?php
                    }
                    ?>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="ajouter" name="ajouter" type="submit" value="S'enregistrer" class="btn btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>