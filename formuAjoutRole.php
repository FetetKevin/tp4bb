<div class="container" style="background: white;">
    <div class="row">
        <h2 class="page-header text-center">Ajoutez un Role !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<div class="container" style="background: white;border-bottom: 1px solid black;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="post" action="traitementAjoutRole.php" id="formuLogin">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nouveau role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="role" placeholder="admin/membre/pompier/furher" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="ajouter" name="ajouter" type="submit" value="Ajouter" class="btn btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>