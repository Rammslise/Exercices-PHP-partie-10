<?php

// -----------------------------------------------------------------------------
//                              INITIALISATION
// -----------------------------------------------------------------------------
//tableau d'erreur vide
$arrayError = array();

//tableau indexé menu déroulant civilité
$tabCivility = array('Sélectionner', 'Mademoiselle', 'Madame', 'Monsieur');

//Une constante ne peut être modifiée par rapport à une variable que l'on peut modifier
//Création de la regex pour le nom
define('REGEX_NAME', '/^[a-zA-ZÀ-ÿ\' -]+$/'); //= $regexName = '/^[A-Z -]+$/';
//Création de la regex pour le prénom
define('REGEX_FIRSTNAME', '/^[a-zA-ZÀ-ÿ\' -]+$/'); //= $regexFirstname = '/^[a-zA-ZÀ-ÿ\' -]+$/';
//Création de la regex de l'âge
define('REGEX_AGE', '/^[0-9]{1,3}$/');
//Création de la regex pour la société
define('REGEX_COMPANY', '/^[a-zA-Z0-9À-ÿ\' -]+$/'); //= $regexCompany = '/^[a-zA-Z0-9À-ÿ\' -]+$/';
//------------------------------------------------------------------------------
//            RÉCUPÉRATIONS ET VALIDATIONS DES DONNÉES DU FORMULAIRE
//------------------------------------------------------------------------------
if (isset($_POST['submit'])) {
    //--------------------------------------------------------------------------
    //                  CONDITIONS DU MENU DÉROULANT CIVILITÉ
    //--------------------------------------------------------------------------
    //si le champ CIVILITÉ existe
    if (isset($_POST['civility'])) {
        //si le champ CIVILITÉ n'est pas vide
        if (!empty($_POST['civility'])) {
            //si le champ CIVILITÉ est valide avec la REGEX 
            //is_int détermine si une variable est de nombre entier, pour tableau indexé ou tableau entier
            //intval convertit type string en type int (entier)
            if (is_int(intval($_POST['civility']))) {
                //alors je stocke le champ
                //On entoure les POST de htmlspecialchars, afin de  convertir les caractères spéciaux en entités HTML
                $civilityInfo = htmlspecialchars($_POST['civility']);
            } else {
                $arrayError['civility'] = 'Merci de sélectionner un choix';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['civility'] = 'Champs obligatoire';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['civility'] = 'Merci de sélectionner un choix';
    }
    //--------------------------------------------------------------------------
    //                       CONDITIONS POUR LE CHAMP NOM
    //--------------------------------------------------------------------------
    //si le champ NOM existe
    if (isset($_POST['lastname'])) {
        //--------------------------------------------------------------------------
        //                              PREMIÈRE MÉTHODE
        //--------------------------------------------------------------------------
        //si le champ NOM n'est pas vide
        //if (!empty($_POST['lastname'])) {
        //si le champ NOM est valide avec la REGEX 
        //if (preg_match(REGEX_NAME, $_POST['lastname'])) {
        //alors je stocke le champ
//                $lastname = htmlspecialchars($_POST['lastname']);
//                //sinon message erreur pour la REGEX non valide
//            } else {
//                $arrayError['lastname'] = 'Merci de rentrer votre nom en majuscules';
//            }
//            //sinon message erreur si le champ existe
//        } else {
//            $arrayError['lastname'] = 'Champs obligatoire';
//        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
//------------------------------------------------------------------------------
//                                      CORRECTION
//------------------------------------------------------------------------------
        //Si le champ est vide
        if (empty($_POST['lastname'])) {
            $arrayError['lastname'] = 'Merci de remplir ce champs';
            //on met un ! pour inverser le résultat de la vérification (FALSE en TRUE)
        } elseif (!preg_match(REGEX_NAME, $_POST['lastname'])) {
            $arrayError['lastname'] = 'Le format du nom renseigné n\'est pas valide';
            //on compare le nombre de caractères voulus dans le champ NOM
            //strlen — Calcule la taille d'une chaîne
        } elseif (strlen($_POST['lastname']) < 2) {
            $arrayError['lastname'] = 'Le nom donné ne peut avoir moins de 2 caractères';
        } elseif (strlen($_POST['lastname']) > 40) {
            $arrayError['lastname'] = 'Le nom donné ne peut pas avoir plus de 40 caractères';
        } else {
            $lastname = htmlspecialchars($_POST['lastname']);
        }
    } else {
        $arrayError['lastname'] = 'Problème survenu, merci de contacter le service support';
    }
    //--------------------------------------------------------------------------
    //                       CONDITIONS POUR LE CHAMP PRÉNOM
    //--------------------------------------------------------------------------
    //si le champ PRÉNOM existe
    if (isset($_POST['firstname'])) {
        //--------------------------------------------------------------------------
        //                              PREMIÈRE MÉTHODE
        //--------------------------------------------------------------------------
//        //si le champ PRÉNOM n'est pas vide
//        if (!empty($_POST['firstname'])) {
//            //si le champ PRÉNOM est valide avec la REGEX 
//            if (preg_match(REGEX_FIRSTNAME, $_POST['firstname'])) {
//                //alors je stocke le champ
//                $firstname = htmlspecialchars($_POST['firstname']);
//                //sinon message erreur pour la REGEX non valide
//            } else {
//                $arrayError['firstname'] = 'Merci de rentrer votre prénom';
//            }
//            //sinon message erreur si le champ existe
//        } else {
//            $arrayError['firstname'] = 'Champs obligatoire';
//        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
        //--------------------------------------------------------------------------
        //                                  CORRECTION
        //--------------------------------------------------------------------------     
        //Si le champ est vide
        if (empty($_POST['firstname'])) {
            $arrayError['firstname'] = 'Merci de remplir ce champs';
            //on met un ! pour inverser le résultat de la vérification (FALSE en TRUE)
        } elseif (!preg_match(REGEX_FIRSTNAME, $_POST['firstname'])) {
            $arrayError['firstname'] = 'Le format du prénom renseigné n\'est pas valide';
            //on compare le nombre de caractères voulus dans le champ NOM
            //strlen — Calcule la taille d'une chaîne
        } elseif (strlen($_POST['firstname']) < 2 || strlen($_POST['firstname']) > 40) {
            $arrayError['firstname'] = 'Le nombre de caractères autorisés est compris entre 2 et 40';
        } else {
            $firstname = htmlspecialchars($_POST['firstname']);
        }
    } else {
        $arrayError['firstname'] = 'Problème survenu, merci de contacter le service support';
    }
    //--------------------------------------------------------------------------
    //                       CONDITIONS POUR LE CHAMP ÂGE
    //--------------------------------------------------------------------------
    //si le champ ÂGE existe
    if (isset($_POST['age'])) {
        //--------------------------------------------------------------------------
        //                              PREMIÈRE MÉTHODE
        //--------------------------------------------------------------------------
//        //si le champ ÂGE n'est pas vide
//        if (!empty($_POST['age'])) {
//            //si le champ ÂGE est valide avec la REGEX 
//            if (preg_match(REGEX_AGE, $_POST['age'])) {
//                //alors je stocke le champ
//                $age = htmlspecialchars($_POST['age']);
//                //sinon message erreur pour la REGEX non valide
//            } else {
//                $arrayError['age'] = 'Merci d\'indiquer votre âge';
//            }
//            //sinon message erreur si le champ existe
//        } else {
//            $arrayError['age'] = 'Champs obligatoire';
//        }
//        } else {
//       $arrayError['age'] = 'Problème survenu, merci de contacter le service support';
//   }
//------------------------------------------------------------------------------
//                                 CORRECTION
//------------------------------------------------------------------------------
        //Si le champ est vide
        if (empty($_POST['age'])) {
            $arrayError['age'] = 'Merci de remplir ce champs';
            //ctype_digit — Vérifie qu'une chaîne est un entier
            //si la regex n'est pas vérifié
        } elseif (!preg_match(REGEX_AGE, $_POST['age'])) {
            $arrayError['age'] = 'Le format de l\'âge doit être numérique';
            //génère une erreur inf. à 15 ans et supérieur 100 ans.
        } elseif ($_POST['age'] < 15 || $_POST['age'] > 100) {
            $arrayError['age'] = 'L\'âge doit être compris entre 15 et 100 ans';
        } else {
            $age = htmlspecialchars($_POST['age']);
        }
    } else {
        $arrayError['age'] = 'Problème survenu, merci de contacter le service support';
    }
//------------------------------------------------------------------------------
//                         CONDITIONS POUR LE CHAMPS SOCIÉTÉ
//------------------------------------------------------------------------------
    //si le champ SOCIÉTÉ existe
    if (isset($_POST['company'])) {
//------------------------------------------------------------------------------
//                               PREMIÈRE MÉTHODE
//------------------------------------------------------------------------------           
//            //si le champ SOCIÉTÉ est valide avec la REGEX 
//            if (preg_match(REGEX_COMPANY, $_POST['company'])) {
//                //alors je stocke le champ
//                $company = htmlspecialchars($_POST['company']);
//                //sinon message erreur pour la REGEX non valide
//            } else {
//                $arrayError['company'] = 'Merci de renseigner le champs correctement';
//            }
//            //sinon message erreur si le champ existe
//        } else {
//            $arrayError['company'] = 'Champs obligatoire';
//        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
// } else {
//    $arrayError['company'] = 'Problème survenu, merci de contacter le service support';
//}
    }
    //si le champ SOCIÉTÉ n'est pas vide
    if (!empty($_POST['company'])) {
        //Si le champ est vide
        if (empty($_POST['company'])) {
            $arrayError['company'] = 'Merci de remplir ce champ';
            //on met un ! pour inverser le résultat de la vérification (FALSE en TRUE)
        } elseif (!preg_match(REGEX_COMPANY, $_POST['company'])) {
            $arrayError['company'] = 'Le format du prénom renseigné n\'est pas valide';
            //on compare le nombre de caractères voulus dans le champ NOM
            //strlen — Calcule la taille d'une chaîne
        } elseif (strlen($_POST['company']) < 2 || strlen($_POST['company']) > 40) {
            $arrayError['company'] = 'Le nombre de caractères autorisés est compris entre 2 et 40';
        } else {
            $firstname = htmlspecialchars($_POST['company']);
        }
    } else {
        $arrayError['company'] = 'Problème survenu, merci de contacter le service support';
    }
}
?>