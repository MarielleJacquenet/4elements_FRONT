
/********************************************/
/*                Menu lateral              */
/********************************************/

let burger = document.querySelector(".burger")
burger.addEventListener("click", glisseMenu)

function glisseMenu() {
    // Role : Ajoute ou enlève la classe permettant d'afficher ou pas le menu lateral
    // Parametres : neant
    // Retour : neant

    let lateral = document.querySelector(".lateral")
    lateral.classList.toggle("menu-cache")
}


/********************************************/
/*         Recup hauteur fenêtre            */
/********************************************/

function hauteurFenetre() {
    // Role : récupère et retourne la hauteur de la fenêtre (valeur arrondie à l'entier le plus proche)
    // Parametres : neant
    // Retour : hauteur

    //récupérer la hauteur de la fenêtre
    return window.innerHeight;

}

/******************************************************/
/*             header devient noir                    */
/******************************************************/
window.addEventListener("scroll", coloreHeader);

function coloreHeader() {
    // Role : met un fond noir au header quand on scroll pour améliorer la lisibilité
    // Parametres : neant
    // Retour : néant

    // récupérer l'élément du DOM correspondant au header
    let elem = document.querySelector("header");

    // récupérer la position dans la fenêtre (scroll)
    let scroll = window.scrollY;

    // si on a scrollé 
    if (scroll > 10) {
        // modifier le fond du header
        elem.style.backgroundColor = "black";
    } else {
        elem.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
    }
}

/******************************************************/
/*             header ombré au scroll                 */
/******************************************************/
/* window.addEventListener("scroll", ombreHeader); */

function ombreHeader() {
    // Role : fait apparaitre une ombre sous le header quand on scroll pour améliorer la lisibilité
    // Parametres : neant
    // Retour : néant

    // récupérer l'élément du DOM correspondant au header
    let elem = document.querySelector("header");

    // récupérer la position dans la fenêtre (scroll)
    let scroll = window.scrollY;

    // si on a scrollé 
    if (scroll > 10) {
        // modifier le style pour ajouter une ombre
        elem.style.boxShadow = "0 1px 10px #C2C0C0";
    } else {
        elem.style.boxShadow = "none";
    }
}

/******************************************************/
/*              verif mail newsletter                 */
/******************************************************/

function verifMailNewsletter(elemMail) {
    // Role: vérifier que l'adresse mail saisie respecte le format défini
    // paramètres: elemMail, l'element du DOM correspondant au champ de saisie du mail 
    // Retour: true si c'est bon, false si ce n'est pas bon

    // expression régulière pour une adresse mail
    let formatMail = /^[A-Za-z0-9\-_]+[A-Za-z0-9\-_.]*[A-Za-z0-9]+@[A-Za-z0-9\-_]+[.][A-Za-z0-9]+[A-Za-z0-9\-_.]*[A-Za-z0-9]+$/

    // Récupérer la valeur saisie pour le mail
    let adresseMail = elemMail.value;

    // Récupérer l'élément du DOM correspondant au message d'erreur pour l'adresse mail
    let pErreur = document.getElementById("p-erreur-mail");

    // Tester si l'adresse mail saisie respecte le format défini
    let okTest = formatMail.test(adresseMail);

    // Si le test est réussi
    if (okTest) {

        // On efface le message d'erreur (au cas où il soit présent) 
        pErreur.textContent = "";

        // On enlever la classe qui met le champ en rouge
        document.querySelector("[name=mail]").classList.remove('erreur-saisie');

        // On retourne true
        return true;
    }
    else { // sinon
        // On encadre le champ en rouge
        document.querySelector("[name=mail]").classList.add('erreur-saisie');

        //  On affiche le message d'erreur 
        pErreur.textContent = "L'adresse mail n'est pas valide (au moins 6 caractères dont '@' et '.' - Pas d'autre caractère que lettres, chiffres, - _ . et 1 seul @";

        // on retourne false
        return false;
    }
}

function verifFormNewsletter() {
    // Role: envoyer le formulaire de Newsletter si l'adresse mail est rempli correctement     
    // Retour: true si c'est bon, false si ce n'est pas bon
    // paramètres: néant

    // Récupérer l'element du DOM correspondant au champ de saisie de l'adresse mail dans le formulaire de contact
    let elemMail = document.querySelector("[name=mail]");

    // Vérifier la validité de l'adresse mail
    let okMail = verifMailNewsletter(elemMail);

    //Si l'adresse mail est valide
    if (okMail) {
        return true;
    } // sinon le formulaire n'est pas envoyé
    else {
        return false;
    }
}