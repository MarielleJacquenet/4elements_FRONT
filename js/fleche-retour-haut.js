/******************************************************/
/* Apparition flèche retour haut fenêtre selon scroll */
/******************************************************/

window.addEventListener("scroll", flecheHautPage);

function flecheHautPage() {
    // Role : fait apparaitre la flèche de retour en haut de la page quand on dépasse la hauteur de la fenêtre en scrollant
    // Parametres : neant
    // Retour : néant

    //récupérer la hauteur de la fenêtre
    // let hauteur = window.innerHeight;

    // récupérer la position dans la fenêtre (scroll)
    let scroll = window.scrollY;

    // récupérer l'élément du DOM correspondant à la flèche de retour en haut
    let elem = document.querySelector(".retour-haut");

    // si on a scrollé d'au moins 200px (choisi arbitrairement)
    if (scroll > 200) {
        // faire apparaitre la flèche en retirant la classe "inactive"
        elem.classList.remove("inactive");
    } else {
        // sinon, remettre la classe "inactive" (cas où on remonte dans la page)
        elem.classList.add("inactive");
    }

}

