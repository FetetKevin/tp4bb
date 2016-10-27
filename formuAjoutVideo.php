<div class="container" style="background: white;border-bottom: 1px solid black;">
    <div class="row">
        <h2 class="page-header text-center">Formulaire pour ajouter une nouvelle video !</h2>
        <form class="form-horizontal" role="form" method="post" action="ajoutVideo.php">
            <div class="form-group">
                <label class="col-sm-2 control-label">URL</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="lienUrl" placeholder="http://exemple.webm" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">TITRE</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="lienTitre" placeholder="Entrez le titre de la video" value="">
                </div>
            </div>
             <!--<div class="form-group">
                <label class="col-sm-2 control-label">DATE</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="lienDate" placeholder="Entrez la date de creation de la video" value="">
                </div>
            </div>-->


            <!-- SEPARATEUR -->
            <div class="row">
                <div class="col-md-4 col-xs-12 col-md-offset-2" style="border-bottom: 1px solid darkgrey;box-shadow: 0px 2px 3px #888888;margin-bottom:30px;"></div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">DESCRIPTION</label>
                <div class="col-sm-6">
                    <textarea class="form-control" rows="4" name="description" placeholder="Description de la video"></textarea>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-6 col-md-offset-2">
                <?php
                $sql= "SELECT * FROM categories";
                $req = $link->query($sql);

                // on envoie la requête
                while ($row = mysqli_fetch_object($req)) {
                ?>
                <label class="btn btn-danger checked">
                    <input type="radio" name="categorie[]" value="<?= $row->id_categorie;?>"> <?= $row->nom_categorie;?>
                </label>
                    <?php
                }
                ?>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input name="envoyer" type="submit" value="Ajouter une video" class="btn btn-danger" style="margin-top:30px;">
                </div>
            </div>
            <br>
            <br>
            <br>
        </form>
    </div>
</div>
<br>
<br>
<br>