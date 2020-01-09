<?php
include 'controller.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Les TP, TP 2</title>
    </head>   
    <body> 
        <!-- Header -->
        <header>
            <img src="assets/img/header.jpg"  class="img-fluid"  alt="wall"/>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../TP1/index.php">TP 1</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../TP2/index.php">TP 2</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../TP3/index.php">TP 3</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Chercher</button>
                    </form>
                </div>
            </nav>
        </header>
        <!--Titre -->
        <div class="form-row justify-content-center">
            <h1>Formulaire d'inscription</h1>
        </div>
        <!--Partie du formulaire -->
        <form method="POST" action="#">
            <!--Civilité (liste déroulante) -->
            <fieldset>
                <div class="row justify-content-center">
                    <div class="form-group col-4">
                        <label for="civility">Civilité</label>
                        <select name="civility" class="form-control">
                            <!--Boucle pour le menu déroulant et lors de la sélection d'une civilité, on affiche le choix au rafraîchissement de la page-->
                            <?php
                            foreach ($tabCivility as $indexCivility => $nameCivility) {
                                ?>
                                <option value ="<?= $indexCivility ?>" <?= $indexCivility == 0 ? 'disabled selected' : '' ?> <?= isset($_POST['civility']) && $indexCivility == $civilityInfo ? 'selected' : '' ?>><?= $nameCivility ?></option>
                            <?php } ?>
                        </select>
                        <small class="text-warning">
                            <?= isset($arrayError['civility']) ? $arrayError['civility'] : '' ?>
                        </small>
                    </div>
                </div>
            </fieldset>
            <!--Champs NOM -->
            <div class="row justify-content-center">
                <div class="form-group col-2">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="DOE" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"/>        
                    <small class="text-warning">
                        <?= isset($arrayError['lastname']) ? $arrayError['lastname'] : '' ?>
                    </small>
                </div>
                <!--Champs PRÉNOM-->
                <div class="form-group col-2">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Jane" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>"/>
                    <small class="text-warning">
                        <?= isset($arrayError['firstname']) ? $arrayError['firstname'] : '' ?>
                    </small>
                </div>
            </div>
            <!--Champs ÂGE-->
            <div class="row justify-content-center">
                <div class="form-group col-2">
                    <label for="age">Âge</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="Votre âge" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>"/>
                    <small class="text-warning">
                        <?= isset($arrayError['age']) ? $arrayError['age'] : '' ?>
                    </small>
                </div>
                <!--Champs SOCIÉTÉ-->
                <div class="form-group col-2">
                    <label for="company">Société</label>
                    <input type="text" class="form-control" name="company" id="company" placeholder="LA MANU" value="<?= isset($_POST['company']) ? $_POST['company'] : '' ?>"/>
                    <small class="text-warning">
                        <?= isset($arrayError['company']) ? $arrayError['company'] : '' ?>
                    </small>
                </div>
            </div>
            <!--Bouton de validation du formulaire -->
            <div class="row justify-content-center">
                <input class="btn btn-primary" type="submit" name="submit" value="Envoyer" />
            </div>
        </form>
        <!--On intégre le php après le html du formlulaire pour le faire apparaître à la fin de ce dernier-->
        <?php
        if (isset($_POST['submit']) && count($arrayError) == 0) {
            ?>
            <p><?= $tabCivility[$civilityInfo] ?></p>
            <p><?= $lastname ?></p>
            <p><?= $firstname ?></p>
            <p><?= $age ?></p>         
            <p><?= $company ?></p>
            <?php
        }
        ?>
        <script src = "assets/js/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>     
    </body>
</html>