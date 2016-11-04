<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-center">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php
                                if(isset($_POST) && empty($_GET['act'])){
                                    echo "Trier la liste";
                                }else{
                                    echo $_GET['act'];
                                }
                                ?>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php">Tous</a></li>
                                <li role="separator" class="divider"></li>
                                <?php
                                $sql= "SELECT * FROM categories";
                                $req = $link->query($sql);

                                // on envoie la requête
                                while ($row = mysqli_fetch_object($req)) {
                                    ?>
                                    <li><a href="index.php?act=<?= $row->nom_categorie; ?>"><?= $row->nom_categorie; ?></a></li>
                                    <li role="separator" class="divider"></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
