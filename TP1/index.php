<?php
include 'indexController.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Les TP, TP 1</title>
    </head>   
    <body> 

        <!-- Header -->
        <header>
            <img src="assets/img/header.jpg"  class="img-fluid"  alt="header"/>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">TP 1</a>
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

        <!-- Formulaire d'inscription -->
        <div class="container">
            <?php
            if (isset($_POST['submit']) && count($arrayError) == 0) {
                ?>
                <p><?= $lastname ?></p>
                <p><?= $firstname ?></p>
                <p><?= $birthDate ?></p>
                <p><?= $nativeCountry ?></p>
                <p><?= $nationality ?></p>
                <p><?= $address ?></p>
                <p><?= $email ?></p>
                <p><?= $phone ?></p>
                <p><?= $tabGraduation[$graduation] ?></p>
                <p><?= $jobNumber ?></p>
                <p><?= $tabBadge[$badgeNumber] ?></p>
                <p><?= $codecademyLink ?></p>
                <p><?= $superHeroQuestion ?></p>
                <p><?= $storyHacks ?></p>
                <p><?= $experience ?></p>

                <?php
            } else {
                
            }
            ?>
            <div class="form-row justify-content-center">
                <h1>Formulaire d'inscription</h1>
            </div>

            <!-- Formulaire d'inscription-->   
            <form method="POST" action="">            
                <!--Partie 1 Identité -->
                <h3 class="text-center mb-0 p-4">Votre identité</h3>
                <div class="form-row text-center justify-content-center">               
                    <div class="form-group col-md-3 text-center">   
                        <!--Champs NOM -->
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="DOE" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"/>
                        <small class="text-warning">
                            <?= isset($arrayError['lastname']) ? $arrayError['lastname'] : ' ' ?>
                        </small>
                    </div>    
                    <!--Champ PRÉNOM -->                    
                    <div class="form-group col-md-3 text-center">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Jane" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>"/>
                        <small>
                            <?= isset($arrayError['firstname']) ? $arrayError['firstname'] : ' ' ?>
                        </small>
                    </div>
                </div>
                <div class="form-row text-center justify-content-center">
                    <div class="form-group col-md-2 ">
                        <!--Champ DATE DE NAISSANCE -->
                        <label for="birthDate">Date de naissance</label>
                        <input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="jj-mm-aaaa" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>"/>
                        <small>
                            <?= isset($arrayError['birthDate']) ? $arrayError['birthDate'] : ' ' ?>
                        </small>
                    </div>
                    <div class="form-group col-md-2">
                        <!--Champ PAYS DE NAISSANCE -->
                        <label for="nativeCountry">Pays de naissance</label>
                        <input type="text" class="form-control" name="nativeCountry" placeholder="FRANCE" id="nativeCountry" value="<?= isset($_POST['nativeCountry']) ? $_POST['nativeCountry'] : '' ?>"/>
                        <small>
                            <?= isset($arrayError['nativeCountry']) ? $arrayError['nativeCountry'] : ' ' ?>
                        </small>
                    </div>
                    <div class="form-group col-md-2">
                        <!--Champ NATIONALITÉ -->
                        <label for="nationality">Nationalité</label>
                        <input type="text" class="form-control" name="nationality" placeholder="fr" id="nationality" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>"/>
                        <small>
                            <?= isset($arrayError['nationality']) ? $arrayError['nationality'] : ' ' ?>
                        </small>
                    </div>  
                </div>

                <!--Partie 2 Coordonnées -->
                <h3 class="text-center mb-0 p-4">Vos coordonnées</h3>
                <div class="form-row text-center justify-content-center">                                                 
                    <div class="form-group text-center">
                        <!--Champ ADRESSE -->
                        <label for="address">Adresse</label>
                        <textarea class="form-control" name="address" id="address" rows="2" value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>" ></textarea>
                        <small>
                            <?= isset($arrayError['address']) ? $arrayError['address'] : ' ' ?>
                        </small>
                    </div>                  
                    <div class="form-group text-center">
                        <!--Champ E-MAIL -->
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@hotmail.com" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"/>                    
                        <small>
                            <?= isset($arrayError['email']) ? $arrayError['email'] : ' ' ?>
                        </small>
                    </div> 
                </div>
                <div class="form-group text-center">
                    <!--Champ TÉLÉPHONE -->
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="0836656565"value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>"/>
                    <small>
                        <?= isset($arrayError['phone']) ? $arrayError['phone'] : ' ' ?>
                    </small>
                </div>                 

                <!--Partie 3 Parcours-->
                <div class="form-group row justify-content-center">                   
                    <legend><h3>Votre parcours</h3></legend>
                    <ul>
                        <div class="form-group text-center">
                            <!--Menu select DIPLÔME -->
                            <label for="graduation">Diplôme</label>
                            <select name="graduation" class="form-control">
                                <?php
                                foreach ($tabGraduation as $indexGraduation => $nameGraduation) {
                                    ?>
                                    <option value ="<?= $indexGraduation ?>" <?= $indexGraduation == 0 ? 'disabled selected' : '' ?>><?= $nameGraduation ?></option>
                                <?php } ?>
                            </select>
                            <small>
                                <?= isset($arrayError['graduation']) ? $arrayError['graduation'] : ' ' ?>
                            </small>
                        </div> 
                        <div class="form-group text-center">
                            <!--Champ PÔLE EMPLOI -->
                            <label for="jobNumber">Numéro Pôle Emploi</label>
                            <input type="text" class="form-control" name="jobNumber" id="jobNumber" placeholder="01234567A" value="<?= isset($_POST['jobNumber']) ? $_POST['jobNumber'] : '' ?>"/>
                            <small>
                                <?= isset($arrayError['jobNumber']) ? $arrayError['jobNumber'] : ' ' ?>
                            </small>
                        </div> 
                        <div class="form-group text-center">
                            <!-- Menu select NOMBRE DE BADGES -->
                            <label for="badgeNumber">Nombre de badges</label>
                            <select id="badgeNumber" class="form-control">
                                <?php
                                foreach ($tabBadge as $indexBadge => $numberBadge) {
                                    ?>
                                    <option value ="<?= $indexBadge ?>" <?= $indexBadge == 0 ? 'disabled selected' : '' ?>><?= $numberBadge ?></option>
                                <?php } ?>
                            </select>
                            <small>
                                <?= isset($arrayError['badgeNumber']) ? $arrayError['badgeNumber'] : ' ' ?>
                            </small>
                        </div> 
                        <div class="form-group text-center">
                            <!--Champ LIEN CODECADEMY -->
                            <label for="codecAcademyLink">Liens codecademy</label>
                            <input type="text" class="form-control" name="codecAdemyLink" id="codecAdemyLink" value="https://www.codecademy.com/ <?= isset($_POST['codecademyLink']) ? $_POST['codecademyLink'] : '' ?>"/>
                            <small>
                                <?= isset($arrayError['codecAdemyLink']) ? $arrayError['codecAdemyLink'] : ' ' ?>
                            </small>
                        </div> 
                    </ul>
                </div>

                <!--Partie 4 Se décrire -->
                <div class="form-group row justify-content-center">                    
                    <h3>Qui êtes-vous ?</h3>                      
                    <div class="form-group text-center">
                        <!--Champ Question Super héro -->
                        <p for="superHeroQuestion">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</p>
                        <textarea class="form-control" name="superHeroQuestion" id="superHeroQuestion" rows="3" value="<?= isset($_POST['superHeroQuestion']) ? $_POST['superHeroQuestion'] : '' ?>"></textarea>
                        <small>
                            <?= isset($arrayError['superHeroQuestion']) ? $arrayError['superHeroQuestion'] : ' ' ?>
                        </small>
                    </div> 
                    <div class="form-group text-center">
                        <!--Champ Question Hacks -->
                        <p for="storyHacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
                        <textarea class="form-control" name="storyHacks" id="storyHacks" rows="3" value="<?= isset($_POST['storyHacks']) ? $_POST['storyHacks'] : '' ?>"></textarea>
                        <small>
                            <?= isset($arrayError['storyHacks']) ? $arrayError['storyHacks'] : ' ' ?>
                        </small>
                    </div> 
                    <div class="form-group text-center">
                        <!--Champ Question Expérience -->
                        <p for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                        <textarea class="form-control" name="experience" id="experience" rows="3" value="<?= isset($_POST['experience']) ? $_POST['experience'] : '' ?>"></textarea>
                        <small>
                            <?= isset($arrayError['experience']) ? $arrayError['experience'] : ' ' ?>
                        </small>
                    </div> 
                </div>
                <!--Bouton de validation du formulaire -->
                <input class="btn btn-light" type="submit" name="submit" value="Envoyer" />
            </form>
        </div>
        <script src = "assets/js/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>     
    </body>
</html>