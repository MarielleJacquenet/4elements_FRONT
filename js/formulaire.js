



function verifMail(elemMail) {
    // Role: vérifier que l'adresse mail saisie respecte le format défini
    // paramètres: elemMail, l'element du DOM correspondant au champ de saisie du mail 
    // Retour: true si c'est bon, false si ce n'est pas bon

    // expression régulière pour une adresse mail
    let formatMail = /^[A-Za-z0-9\-_]+[A-Za-z0-9\-_.]*[A-Za-z0-9]+@[A-Za-z0-9\-_]+[.][A-Za-z0-9]+[A-Za-z0-9\-_.]*[A-Za-z0-9]+$/

    // Récupérer la valeur saisie pour le mail
    let adresseMail = elemMail.value;

    // Récupérer l'élément du DOM correspondant au message d'erreur pour l'adresse mail
    let pErreur = document.getElementById("p-erreur-email");

    // Tester si l'adresse mail saisie respecte le format défini
    let okTest = formatMail.test(adresseMail);

    // Si le test est réussi
    if (okTest) {

        // On efface le message d'erreur (au cas où il soit présent) 
        pErreur.textContent = "";

        // On enlever la classe qui met le champ en rouge
        document.querySelector("[name=email]").classList.remove('erreur-saisie');

        // On retourne true
        return true;
    }
    else { // sinon
        // On encadre le champ en rouge
        document.querySelector("[name=email]").classList.add('erreur-saisie');

        //  On affiche le message d'erreur 
        pErreur.textContent = "L'adresse mail n'est pas valide (au moins 6 caractères dont '@' et '.' - Pas d'autre caractère que lettres, chiffres, - _ . et 1 seul @";

        // on retourne false
        return false;
    }
}

function verifSujet(elemSujet) {
    // Role: vérifier que la chaine saisie dans le champs sujet contient entre 4 et 40 caractères
    // paramètres: elemSujet, l'element du DOM correspondant au champ de saisie du sujet
    // Retour: true si c'est bon, false si ce n'est pas bon

    // Récupérer la valeur saisie pour le sujet
    let sujet = elemSujet.value;
    // Récupérer la longueur de la chaine sujet
    let tailleSujet = sujet.length;

    // Récupérer l'élément du DOM correspondant au message d'erreur pour le sujet
    let pErreur = document.getElementById("p-erreur-sujet");

    if (tailleSujet >= 4 && tailleSujet <= 40) {

        // On efface le message d'erreur (au cas où il soit présent) 
        pErreur.textContent = "";

        // On enlever la classe qui met le champ en rouge
        document.querySelector("[name=sujet]").classList.remove('erreur-saisie');

        // On retourne true
        return true;
    } else {// sinon
        // On encadre le champ en rouge
        document.querySelector("[name=sujet]").classList.add('erreur-saisie');

        //  On affiche le message d'erreur 
        pErreur.textContent = "Le sujet doit faire de 4 à 40 caractères";

        // on retourne false
        return false;
    }
}

function verifMessage(elemMessage) {
    // Role: vérifier que la chaine saisie dans le champs message contient entre 10 et 400 caractères
    // paramètres: elemMessage, l'element du DOM correspondant au champ de saisie du message
    // Retour: true si c'est bon, false si ce n'est pas bon

    // Récupérer la valeur saisie pour le message
    let message = elemMessage.value;
    // Récupérer la longueur de la chaine message
    let tailleMessage = message.length;

    // Récupérer l'élément du DOM correspondant au message d'erreur pour le message
    let pErreur = document.getElementById("p-erreur-message");

    if (tailleMessage >= 10 && tailleMessage <= 400) {

        // On efface le message d'erreur (au cas où il soit présent) 
        pErreur.textContent = "";

        // On enlever la classe qui met le champ en rouge
        document.querySelector("[name=message]").classList.remove('erreur-saisie');

        // On retourne true
        return true;
    } else {// sinon
        // On encadre le champ en rouge
        document.querySelector("[name=message]").classList.add('erreur-saisie');

        //  On affiche le message d'erreur 
        pErreur.textContent = "Le message doit faire de 10 à 400 caractères";

        // on retourne false
        return false;
    }
}

function verifFormContact() {
    // Role: envoyer le formulaire si tous les champs du formulaire exigés sont remplis correctement     
    // Retour: true si c'est bon, false si ce n'est pas bon
    // paramètres: néant

    // Nom et prénom pas exigés => on ne vérifie pas

    // Récupérer l'element du DOM correspondant au champ de saisie de l'adresse mail dans le formulaire de contact
    let elemMail = document.querySelector("[name=email]");

    // Vérifier la validité de l'adresse mail
    let okMail = verifMail(elemMail);

    // Récupérer l'element du DOM correspondant au champ de saisie du sujet dans la page contact
    let elemSujet = document.querySelector("[name=sujet]");

    // Vérifier la validité du sujet
    let okSujet = verifSujet(elemSujet);

    // Récupérer l'element du DOM correspondant au champ de saisie du message dans le formulaire de contact
    let elemMessage = document.querySelector("[name=message]");

    // Vérifier la validité du message
    let okMessage = verifMessage(elemMessage);

    // Si tous les champs sont correctement saisis 
    if (okMail && okSujet && okMessage) {
        // on renvoie true 
        return true;
    } else {
        // sinon on renvoie false
        return false
    }
}



/*
formatMail.test(".esffeff@dfsfdsf.fdsfdsf")
false
formatMail.test("-esffeff@dfsfdsf.fdsfdsf")
true
formatMail.test("esf.feff@dfsfdsf.fdsfdsf")
true
formatMail.test(".esffeff@dfsfdsf.fdsfnjknjnkdsf")
false
formatMail.test("eèsffeff@dfsfdsf.fdsfdsf")
false
formatMail.test("esffeff@dfsfdsf.fdsfdsf")
true
formatMail.test("-esffeff@.fdsfdsf")
false
formatMail.test("-esffeff@dfsfdsf.fdsfdsf")
true
formatMail.test("-esffeff@dfsfdsf.f")
false
formatMail.test("-esffeff@dfsfdsf.fd")
true
formatMail.test("-esff---eff@dfsfdsf.fdsfdsf")
true
formatMail.test("-esff@eff@dfsfdsf.fdsfdsf")
false
formatMail.test("-esf.__feff@dfs-.fdsf.fdsf.dsf")
true
*/