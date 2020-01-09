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
        <title>Les TP, TP 3</title>
    </head>   
    <body> 
        <!-- Header -->
        <header class="text-right">
            <img src="assets/img/logo.png" class="img-fluid" alt="logo"/>           
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
        <!--Card comprenant les différents portraits -->
        <div class="row">
            <div class="col-6">
                <div class="card-body">
                    <p class="card-text"><?= showArray($portrait1) ?></p>
                    Victor Hugo est un poète, dramaturge, écrivain, romancier et dessinateur romantique français, né le 26 février 1802 à Besançon et mort le 22 mai 1885 à Paris.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="card-body">
                    <p class="card-text"><?= showArray($portrait2) ?></p>
                    Jean de La Fontaine, né le 8 juillet 1621 à Château-Thierry et mort le 13 avril 1695 à Paris, est un poète français de grande renommée, principalement pour ses Fables et dans une moindre mesure pour ses contes.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card-body">
                    <p class="card-text"><?= showArray($portrait3) ?></p>
                    Pierre Corneille, aussi appelé « le Grand Corneille » ou « Corneille l'aîné », né le 6 juin 1606 à Rouen et mort le 1ᵉʳ octobre 1684 à Paris, est un dramaturge et poète français du XVIIᵉ siècle.
                </div>
            </div>
            <div class="col-6">
                <div class="card-body">
                    <p class="card-text"><?= showArray($portrait4) ?></p>
                    Jean Racine est un dramaturge et poète français. Issu d'une famille de petits notables de la Ferté-Milon et tôt orphelin, Racine reçoit auprès des « Solitaires » de Port-Royal une éducation littéraire et religieuse rare.
                </div>
            </div>     
        </div>

        <script src = "assets/js/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>     
    </body>
</html>