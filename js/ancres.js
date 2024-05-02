/*******************************************************/
/* décaler les ancres pour tenir compte du header fixe */
/*******************************************************/

function decaleAncre(id) {
    // Role : remonter dans la fenetre de la hauteur du header)
    // Parametres : neant
    // Retour : néant

    // récupérer l'élément du DOM
    let elem = document.getElementById(id);
    //scroller jusqu'à cet élément
    elem.scrollIntoView();
    //décaler le scroll pour tenir compte du header fixe qui cache le haut de la fenêtre
    window.scrollBy(0, -125);
}


/*******************************************************/
/*                 simuler un lien a                   */
/*******************************************************/

function simuleSurvolLien(elem) {
    // Role : change la couleur de l'élément et met un pointer
    // Parametres : elem, l'élément du DOM traité
    // Retour : néant

    // ajoute la classe survol qui change la couleur de l'élément et met un pointeur
    elem.classList.add("survol");
}

function simuleStopSurvolLien(elem) {
    // Role : change la couleur de l'élément et met un pointer
    // Parametres : elem, l'élément du DOM traité
    // Retour : néant

    // enlève la classe survol qui change la couleur de l'élément et met un pointeur
    elem.classList.remove("survol");
}