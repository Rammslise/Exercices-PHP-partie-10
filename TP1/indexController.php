<?php

//tableau d'erreur vide
$arrayError = array();

//tableau indexé menu déroulant diplôme
$tabGraduation = array('Sélectionner un diplôme', 'sans', 'Bac', 'Bac+2', 'Bac+3 ou plus');

//tableau indexé menu déroulant badge
$tabBadge = array('Sélectionner un nombre de badge', '0', '1', '2', '3 ou plus');

//Création de la regex pour le nom, le prénom, la nationalité et le pays de naissance
$regexNameCountryNationality = '/^[a-zA-ZÀ-ÿ’ -]+$/';
//Création de la regex pour la date de naissance avec les tirets
$regexBirth = '/^(19|20)[0-9]{2}-[0-9]{2}-[0-9]{2}$/';
//Création de la regex pour le numéro de rue, le nom, le code postal et le nom de la ville
$regexAddress = '/^\d[\s[A-zÀ-ÿ’]+\s[0-9]{5}\s[a-zA-ZÀ-ÿ’ -]+$/';
//Création de la regex pour l'adresse mail
$regexMail = '/^[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]{2,}.[a-z]{2,4}$/';
//Création de la regex du numéro de téléphone
$regexPhone = '/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/';
//Création de la regex du numéro de pôle emploi
$regexJobNumber = '/^[0-9]{7}[a-zA-Z]+$/';
//Création lien codecademy
$regexLink = '/^https:\/\/www.codecademy.com\/[a-zA-ZÀ-ÿ’ -]+$/';

//On crée les variables POST pour remplir les conditions à la validation des champs du formulaire
//On entourne les POST de htmlspecialchars, afin de  convertir les caractères spéciaux en entités HTML
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthDate = $_POST['birthDate'];
$nativeCountry = $_POST['nativeCountry'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$graduation = $_POST['graduation'];
$jobNumber = $_POST['jobNumber'];
$badgeNumber = $_POST['badgeNumber'];
$codecademyLink = $_POST['codecademyLink'];
$superHeroQuestion = $_POST['superHeroQuestion'];
$storyHacks = $_POST['storyHacks'];
$experience = $_POST['experience'];
$submit = $_POST['submit'];

//Conditions pour les champs à remplir
//Pour le champ NOM, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ NOM existe
    if (isset($_POST['lastname'])) {
        //si le champ NOM n'est pas vide
        if (!empty($_POST['lastname'])) {
            //si le champ NOM est valide avec la REGEX 
            if (preg_match($regexNameCountryNationality, $_POST['lastname'])) {
                //alors je stocke le champ
                $lastname = htmlspecialchars($_POST['lastname']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['lastname'] = 'Merci de rentrer votre nom';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['lastname'] = 'Champs obligatoire';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['lastname'] = 'Problème survenu, merci de contacter le service support';
    }
}
//Pour le champ PRÉNOM, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ PRÉNOM existe
    if (isset($_POST['firstname'])) {
        //si le champ PRÉNOM n'est pas vide
        if (!empty($_POST['firstname'])) {
            //si le champ PRÉNOM est valide avec la REGEX 
            if (preg_match($regexNameCountryNationality, $_POST['firstname'])) {
                //alors je stocke le champ
                $firstname = htmlspecialchars($_POST['firstname']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['firstname'] = 'Merci de rentrer votre prénom';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['firstname'] = 'Champs obligatoire';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['firstname'] = 'Problème survenu, merci de contacter le service support';
    }
}
//Pour le champ DATE DE NAISSANCE, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ DATE DE NAISSANCE existe
    if (isset($_POST['birthDate'])) {
        //si le champ DATE DE NAISSANCE n'est pas vide
        if (!empty($_POST['birthDate'])) {
            //si le champ DATE DE NAISSANCE est valide avec la REGEX 
            if (preg_match($regexBirth, $_POST['birthDate'])) {
                //alors je stocke le champ
                $birthDate = htmlspecialchars($_POST['birthDate']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['birthDate'] = 'Merci de rentrer une date valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['birthDate'] = 'Champs obligatoire';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['birthDate'] = 'Problème survenu, merci de contacter le service support';
    }
}
//Pour le champ PAYS DE NAISSANCE, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ PAYS DE NAISSANCE existe
    if (isset($_POST['nativeCountry'])) {
        //si le champ PAYS DE NAISSANCE n'est pas vide
        if (!empty($_POST['nativeCountry'])) {
            //si le champ PAYS DE NAISSANCE est valide avec la REGEX 
            if (preg_match($regexNameCountryNationality, $_POST['nativeCountry'])) {
                //alors je stocke le champ
                $nativeCountry = htmlspecialchars($_POST['nativeCountry']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['nativeCountry'] = 'Merci de rentrer un pays valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['nativeCountry'] = 'Champs obligatoire';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['nativeCountry'] = 'Problème survenu, merci de contacter le service support';
    }
}
//Pour le champ NATIONALITÉ, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ NATIONALITÉ existe
    if (isset($_POST['nationality'])) {
        //si le champ NATIONALITÉ n'est pas vide
        if (!empty($_POST['nationality'])) {
            //si le champ NATIONALITÉ est valide avec la REGEX 
            if (preg_match($regexNameCountryNationality, $_POST['nationality'])) {
                //alors je stocke le champ
                $nationality = htmlspecialchars($_POST['nationality']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['nationality'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['nationality'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['nationality'] = 'Contactez le service support';
    }
}
//Pour le champ ADRESSE, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ ADRESSE existe
    if (isset($_POST['address'])) {
        //si le champ ADRESSE n'est pas vide
        if (!empty($_POST['address'])) {
            //si le champ ADRESSE est valide avec la REGEX 
            if (preg_match($regexAddress, $_POST['address'])) {
                //alors je stocke le champ
                $address = htmlspecialchars($_POST['address']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['address'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['address'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['address'] = 'Contactez le service support';
    }
}
//Pour le champ EMAIL, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ EMAIL existe
    if (isset($_POST['email'])) {
        //si le champ EMAIL n'est pas vide
        if (!empty($_POST['email'])) {
            //si le champ EMAIL est valide avec la REGEX 
            //filter_var permet de vérifier si le mail ressemble à un mail
            if (preg_match($regexMail, $_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                //alors je stocke le champ
                $email = htmlspecialchars($_POST['email']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['email'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['email'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['email'] = 'Contactez le service support';
    }
}
//Pour le champ NUMÉRO DE TÉLÉPHONE, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ NUMÉRO DE TÉLÉPHONE existe
    if (isset($_POST['phone'])) {
        //si le champ NUMÉRO DE TÉLÉPHONE n'est pas vide
        if (!empty($_POST['phone'])) {
            //si le champ NUMÉRO DE TÉLÉPHONE est valide avec la REGEX 
            if (preg_match($regexPhone, $_POST['phone'])) {
                //alors je stocke le champ
                $phone = htmlspecialchars($_POST['phone']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['phone'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['phone'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['phone'] = 'Contactez le service support';
    }
}
//Pour le select DIPLÔME, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ DIPLÔME existe
    if (isset($_POST['graduation'])) {
        //si le champ DIPLÔME n'est pas vide
        if (!empty($_POST['graduation'])) {
            //si le champ DIPLÔME est valide avec la REGEX 
            //is_int détermine si une variable est de nombre entier, pour tableau indexé ou tableau entier
            //intval convertit type string en type int (entier)
            if (is_int(intval($_POST['graduation']))) {
                //alors je stocke le champ
                $graduation = htmlspecialchars($_POST['graduation']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['graduation'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['graduation'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['graduation'] = 'Contactez le service support';
    }
}
//Pour le champ NUMÉRO DE PÔLE EMPLOI, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ NUMÉRO DE PÔLE EMPLOI existe
    if (isset($_POST['jobNumber'])) {
        //si le champ NUMÉRO DE PÔLE EMPLOI n'est pas vide
        if (!empty($_POST['jobNumber'])) {
            //si le champ NUMÉRO DE PÔLE EMPLOI est valide avec la REGEX 
            if (preg_match($jobNumber, $_POST['jobNumber'])) {
                //alors je stocke le champ
                $jobNumber = htmlspecialchars($_POST['jobNumber']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['jobNumber'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['jobNumber'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['jobNumber'] = 'Contactez le service support';
    }
}
//Pour le select NOMBRE DE BADGES, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ NOMBRE DE BADGES existe
    if (isset($_POST['badgeNumber'])) {
        //si le champ NOMBRE DE BADGES n'est pas vide
        if (!empty($_POST['badgeNumber'])) {
            //si le champ NOMBRE DE BADGES est valide avec la REGEX 
            //ctype_digit vérifie si une chaîne de caractère est un entier
            if (ctype_digit($_POST['badgeNumber'])) {
                //alors je stocke le champ
                $badgeNumber = htmlspecialchars($_POST['badgeNumber']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['badgeNumber'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['badgeNumber'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['badgeNumber'] = 'Contactez le service support';
    }
}
//Pour le champ LIEN CODECADEMY, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ LIEN CODECADEMY existe
    if (isset($_POST['codecademyLink'])) {
        //si le champ LIEN CODECADEMY n'est pas vide
        if (!empty($_POST['codecademyLink'])) {
            //si le champ LIEN CODECADEMY est valide avec la REGEX 
            if (preg_match($regexLink, $_POST['codecademyLink']) && filter_var($_POST['codecademyLink'], FILTER_VALIDATE_URL)) {
                //alors je stocke le champ
                $codecademyLink = htmlspecialchars($_POST['codecademyLink']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['codecademyLink'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['codecademyLink'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['codecademyLink'] = 'Contactez le service support';
    }
}
//Pour le champ SUPER HERO QUESTION, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ SUPER HERO QUESTION existe
    if (isset($_POST['superHeroQuestion'])) {
        //si le champ SUPER HERO QUESTION n'est pas vide
        if (!empty($_POST['superHeroQuestion'])) {
            //si le champ NUMÉRO DE PÔLE EMPLOI est valide avec la REGEX 
            if (preg_match($$regexNameCountryNationality, $_POST['superHeroQuestion'])) {
                //alors je stocke le champ
                $superHeroQuestion = htmlspecialchars($_POST['superHeroQuestion']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['superHeroQuestion'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['superHeroQuestion'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['superHeroQuestion'] = 'Contactez le service support';
    }
}
//Pour le champ HACKS QUESTION, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ HACKS QUESTION existe
    if (isset($_POST['storyHacks'])) {
        //si le champ HACKS QUESTION n'est pas vide
        if (!empty($_POST['storyHacks'])) {
            //si le champ HACKS QUESTION est valide avec la REGEX 
            if (preg_match($regexNameCountryNationality, $_POST['storyHacks'])) {
                //alors je stocke le champ
                $storyHacks = htmlspecialchars($_POST['storyHacks']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['storyHacks'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['storyHacks'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['storyHacks'] = 'Contactez le service support';
    }
}
//Pour le champ EXPÉRIENCE, si je valide le formulaire avec le bouton
if (isset($_POST['submit'])) {
    //si le champ EXPÉRIENCE existe
    if (isset($_POST['experience'])) {
        //si le champ EXPÉRIENCE n'est pas vide
        if (!empty($_POST['experience'])) {
            //si le champ EXPÉRIENCE est valide avec la REGEX 
            if (preg_match($regexNameCountryNationality, $_POST['experience'])) {
                //alors je stocke le champ
                $experience = htmlspecialchars($_POST['experience']);
                //sinon message erreur pour la REGEX non valide
            } else {
                $arrayError['experience'] = 'Champs non valide';
            }
            //sinon message erreur si le champ existe
        } else {
            $arrayError['experience'] = 'Merci de remplir le champs';
        }
        //sinon si à la validation du formulaire, celui-ci rencontre un soucis
    } else {
        $arrayError['experience'] = 'Contactez le service support';
    }
}
?>