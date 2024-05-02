/***********************************/
/*   gestion du slider defilant    */
/***********************************/

// tableau contenant la liste des diapos
let tabDiapos = document.getElementsByClassName('diapo');

// initialisation de l'indice de l'image en cours d'affichage
let indiceDiapo = 0;

//lancement du defilement automatique    
window.onload = defileAuto();

function defileAuto() {
    //Role : lancer le défilement automatique des images du slider à l'ouverture de la page
    //Paramètres : aucun
    //Retour : aucun

    //lancer la fonction de changement d'image toutes les 7 s
    setInterval("changeSlider(1)", 7000);
}

function changeSlider(modifIndice) {
    // Role : change l'image affichée dans le slider en passant la classe 'active' sur l'image
    // Paramètres : modifIndice, qui vaut 1 si pour la diapo suivante, -1 pour la diapo précédente
    // Retour : aucun

    //Enlever la classe active de toutes les images en parcourant le tableau des images
    for (let i = 0; i < tabDiapos.length; i++) {
        //pour chaque image du tableau 
        //recuperer l'element correspondant
        let elem = tabDiapos[i];
        //lui retirer la classe active
        elem.classList.remove('img-active');
    }

    //Calculer le nouvel indice de l'image dans le tableau des images
    indiceDiapo += parseInt(modifIndice);

    //tester si on a dépassé les limites du tableau d'un coté ou de l'autre
    if (indiceDiapo == tabDiapos.length) {
        // si on dépasse à droite, on repart de la première image
        indiceDiapo = 0;
    } else if (indiceDiapo == -1) {
        // si on dépasse à gauche, on repart sur la dernière image
        indiceDiapo = tabDiapos.length - 1;
    } //sinon l'indice est bien compris dans le tableau

    //Afficher l'image correspondant au nouvel indice, en lui ajoutant la class active
    //recuperer l'element correspondant à la nouvelle image
    let elem = tabDiapos[indiceDiapo];
    //lui ajouter la classe active
    elem.classList.add('img-active');
}
