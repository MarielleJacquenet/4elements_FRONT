<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- include des parties communes du head pour l'ensemble des pages -->
    <?php include("parts/head.php"); ?>

    <!-- title et description propres à chaque page -->
    <title>4 Elements, des hôtels de luxe à votre service dans des environnements exceptionnels</title>
    <meta name="description" content="Découvrez les hôtels 4 Eléments liés aux 4 éléments situés dans des sites exceptionnels intégrés dans leurs éléments naturels dans des lieux insolites à l'écart du tourisme de masse">
</head>

<body>
    <?php include('parts/header.php'); ?>

    <main id="principale">
        <?php include('parts/menu-lateral.php'); ?>
        <?php include('parts/fleche-retour-haut.php'); ?>
        <div class="cadre-header large-none small-block">
        </div>
        <div class="slider large-100 small-none">
            <img src="img/large/sliderEAU.jpg" alt="Photo de l'hotel EAU" class="img-active diapo img-responsive">
            <img src="img/large/sliderFEU.jpg" alt="Photo de l'hotel FEU" class="diapo img-responsive">
            <img src="img/large/sliderTERRE.jpg" alt="Photo de l'hotel TERRE" class="diapo img-responsive">
            <img src="img/large/sliderAIR.jpg" alt="Photo de l'hotel AIR" class="diapo img-responsive">
            <div class="flecheDroite" onclick="changeSlider(1)"></div>
            <div class="flecheGauche" onclick="changeSlider(-1)"></div>
            <div class="slogan large-84 medium-none">
                <form method="post" action="traitement.php" class="flex">
                    <div class="flex align-center large-20b border-rigth">
                        <select name="hotel" id="hotel" required>
                            <option value="" selected>Hotel</option>
                            <option value="eau">Hotel EAU</option>
                            <option value="air">Hotel AIR</option>
                            <option value="feu">Hotel FEU</option>
                            <option value="terre">Hotel TERRE</option>
                        </select>
                    </div>
                    <div class="flex large-20b align-center border-rigth">
                        <div class="large-16">
                            <img src="img/large/Icon-feather-calendar.png" alt="Entrez votre date d'arrivée" class="img-responsive">
                        </div>
                        <div class="large-84">
                            <input name="arrivee" type="text" required placeholder="Arrivée" onfocus="(this.type='date')">
                        </div>
                    </div>
                    <div class="flex large-20b align-center border-rigth">
                        <div class="large-16">
                            <img src="img/large/Icon-feather-calendar.png" alt="Entrez votre date de départ" class="img-responsive">
                        </div>
                        <div class="large-84">
                            <input name="depart" type="text" required placeholder="Départ" onfocus="(this.type='date')">
                        </div>
                    </div>
                    <div class="flex large-20b align-center border-rigth">
                        <div class="large-16">
                            <img src="img/large/Icon-feather-user.png" alt="Entrez le nombre de personnes" class="img-responsive">
                        </div>
                        <div class="large-84">
                            <select name="nb-personnes" id="nb-personnes">
                                <option value="1" selected>1 personne</option>
                                <option value="2">2 personnes</option>
                                <option value="3">3 personnes</option>
                                <option value="4">4 personnes</option>
                            </select>
                        </div>
                    </div>
                    <div class="large-20b">
                        <button class="btn btn2">Réserver</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="hotels">
            <div class="container flex justify-between text-center">
                <div class="un-hotel large-25 medium-50 small-100">
                    <img src="img/large/suiteliving-eau.jpg" alt="Vue sur le salon de l'hôtel EAU" class="img-responsive">
                    <h2>EAU</h2>
                    <p> Texte fourni : L'hôtel Eau est située sur une île de 2 kilomètres carrés très exactement équidistante de Vladivostok et de Los Angeles.</p>
                    <div class="flex justify-between top-8 bottom-48">
                        <a href="hotel-EAU.php" title="Découvrir l'hotel EAU" class="large-50 medium-100 btn btn3">Découvrir</a>
                        <a href="hotel-EAU.php" title="Réserver une chambre dans l'hotel EAU" class="large-50 medium-100 btn btn2 small-top-8">Réserver</a>
                    </div>
                </div>
                <div class="un-hotel large-25 medium-50 small-100">
                    <img src="img/large/hotel-feu1.jpg" alt="Vue sur le salon de l'hôtel FEU" class="img-responsive">
                    <h2>FEU</h2>
                    <p>L'hôtel Feu ne se situe bien sûr pas sur un volcan, mais en Finlande. Feu de la terre volcanique crachant non loin de là ses geysers, feu des volcans à l'horizon.</p>
                    <div class="flex justify-between top-8 bottom-48">
                        <a href="enconstruction.php" title="Découvrir l'hotel " class="large-50 medium-100 btn btn3">Découvrir</a>
                        <a href="enconstruction.php" title="Réserver une chambre dans l'hotel" class="large-50 medium-100 btn btn2 small-top-8">Réserver</a>
                    </div>
                </div>
                <div class="un-hotel large-25 medium-50 small-100">
                    <img src="img/large/restaurant-terre.jpg" alt="Vue sur le salon de l'hôtel TERRE" class="img-responsive">
                    <h2>TERRE</h2>
                    <p>L'hôtel Terre est situé dans des grottes naturelles en Thaïlande. Retaillées et aménagées avec soin, les chambres de l'hôtel vous offriront la fraîcheur.</p>
                    <div class="flex justify-between top-8 bottom-48">
                        <a href="enconstruction.php" title="Découvrir l'hotel " class="large-50 medium-100 btn btn3">Découvrir</a>
                        <a href="enconstruction.php" title="Réserver une chambre dans l'hotel" class="large-50 medium-100 btn btn2 small-top-8">Réserver</a>
                    </div>
                </div>
                <div class="un-hotel large-25 medium-50 small-100">
                    <img src="img/large/vue-residence-air1.jpg" alt="Vue sur le salon de l'hôtel AIR" class="img-responsive">
                    <h2>AIR</h2>
                    <p>L'hôtel Air se situe à la frontière du Brésil et du Pérou. C'est un concept architectural innovant qui a permis une implantation à la cîme de la forêt.</p>
                    <div class="flex justify-between top-8 bottom-48">
                        <a href="enconstruction.php" title="Découvrir l'hotel " class="large-50 medium-100 btn btn3">Découvrir</a>
                        <a href="enconstruction.php" title="Réserver une chambre dans l'hotel" class="large-50 medium-100 btn btn2 small-top-8">Réserver</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="concept">
            <div class="container flex large-75 medium-100 small-100">
                <div class="large-50 small-100 right-24 small-right0 small-padding0">
                    <img src="img/large/champagne.jpg" alt="Bougies et champagne" class="img-responsive">
                </div>
                <div class="large-50 small-100 small-text-center">
                    <h1>Le luxe est notre aventure</h1>
                    <p class="chapeau">Depuis l'ouverture de ses 4 hôtels en 2012, 4 Eléments a imposé sa marque : des hôtels d'exception dans des lieux d'exception. Nous sommes inouïs. Tout comme vous.</p>
                    <p class="small-none">4 Eléments, c'est 4 hôtels pour 4 éléments : terre, eau, air feu. 4 hôtels insolites bâtis sur des lieux inattendus de la planète pour la construction desquels nous avons du prouver que nous étions les meilleurs, les plus inventifs et, en même temps, les plus à l'écoute de l'identité du site choisi. Que nous voulions révolutionner le tourisme : le luxe, l'aventure et la vision à long terme</p>
                    <a href="enconstruction.php" title="En apprendre plus sur le concept des 4 Eléments" class="btn btn3 margin-top-8">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="architecture container">
            <div class="flex align-center large-100 small-100">
                <div class="large-50 small-100 padding-right-24 ">
                    <h3>Trinh Xuan Thuan, co-fondateur de 4 Eléments</h3>
                    <blockquote>
                        <p> « L'architecture innovante est un pas supplémentaire vers l'exploration de l'Espace, c'est à dire l'extension de notre civilisation dans ce qu'elle a de meilleur.<span class="large-none small-inline-block">»</span></p>
                        <p class="small-none inline-block">S'immerger dans un de nos hôtels, c'est vivre une expérience sensorielle, c'est pouvoir se ressourcer au contact des matières des 4 éléments. C'est se découvrir à l'unisson de la terre, de l'air, de l'eau, du feu.»</p>
                    </blockquote>
                </div>
                <div class="large-50 small-100 small-padding0 echange">
                    <img src="img/large/trinh-xuan-thuan.jpg" alt="Photo de Trinh Xuan Thuan" class="img-responsive">
                </div>
            </div>
            <div class="flex align-center large-100 small-100">
                <div class="large-50 small-100 right-24 small-right0 small-padding0">
                    <img src="img/large/porche-air.jpg" alt="Porche d'une résidence de l'hôtel AIR" class="img-responsive">
                </div>
                <div class="large-50 small-100">
                    <h3>Au service des plus grands architectes </h3>
                    <p>4 Eléments se met au service des plus grands noms de l'architecture mondiale et non le contraire. En effet, nous souhaitons que les artistes - c'est-à-dire aussi bien les architectes d'intérieur qui travaillent à nos côtés - se sentent le plus libres d'innover</p>
                </div>
            </div>
            <div class="text-center top-24">
                <a href="enconstruction.php" title="En savoir plus sur l'architecture" class="btn btn2">En savoir plus sur l'architecture</a>
            </div>
        </div>

        <div class="galerie text-center small-none">
            <h3>Galerie photo</h3>
            <div class="container flex justify-between align-start">
                <img src="img/large/chambre-terre1.jpg" alt="Photo d'une chambre de l'hotel TERRE" class="large-25 medium-50">
                <img src="img/large/chambre-feu.jpg" alt="Photo d'une chambre de l'hotel FEU" class="large-25 medium-50">
                <img src="img/large/chambre-eau.jpg" alt="Photo d'une chambre de l'hotel EAU" class="large-25 medium-50">
                <img src="img/large/salle-feu.jpg" alt="Photo d'un salon de l'hotel FEU" class="large-25 medium-50">
            </div>
            <div class="container flex justify-between text-center align-start small-none top-24">
                <img src="img/large/hallway-eau.jpg" alt="Photo du cooridor de l'hotel EAU" class="large-25 medium-50">
                <img src="img/large/salle-air.jpg" alt="Photo d'une salle à manger de l'hotel EAU" class="large-25 medium-50">
                <img src="img/large/aurore-boreale.jpg" alt="Aurore Boréale" class="large-25 medium-50">
                <img src="img/large/salle-terre.jpg" alt="Photo de la salle de restaurant de l'hotel TERRE" class="large-25 medium-50">
            </div>
            <a href="enconstruction.php" title="Voir l'ensemble des photos de la galerie" class="btn btn3 margin-top-24">Voir plus de photos</a>
        </div>

        <div class="presse  text-center small-none">
            <h3>Revue de presse</h3>
            <div class="flex small-none justify-between text-center align-center">
                <div class="large-20">
                    <a href="enconstruction.php" title="Lien vers l'article du Telegraph">
                        <img src="img/large/telegraph.png" alt="Logo Telegraph" class="img-responsive">
                    </a>
                </div>
                <div class="large-20">
                    <a href="enconstruction.php" title="Lien vers l'article du Canadian Traveller">
                        <img src="img/large/canadian-traveller.png" alt="Logo Canadian Traveller" class="img-responsive">
                    </a>
                </div>
                <div class="large-20">
                    <a href="enconstruction.php" title="Lien vers l'article du magazine Vogue">
                        <img src="img/large/vogue.png" alt="Logo Vogue" class="img-responsive">
                    </a>
                </div>
                <div class="large-20">
                    <a href="enconstruction.php" title="Lien vers l'article du Conde Nast Traveller">
                        <img src="img/large/conde-nast-traveller.png" alt="Logo Conde Nast Traveller" class="img-responsive">
                    </a>
                </div>
                <div class="large-20">
                    <a href="enconstruction.php" title="Lien vers l'article du Monde">
                        <img src="img/large/le-monde.png" alt="Logo Le Monde" class="img-responsive">
                    </a>
                </div>
            </div>
            <a href="enconstruction.php" title="Voir tous les articles de presse" class="btn btn2">Voir plus d'articles</a>
        </div>
    </main>

    <?php include('parts/footer.php'); ?>

    <script src="./js/fonctions.js"></script>
    <script src="./js/fleche-retour-haut.js"></script>
    <script src="./js/slider2.js"></script>
</body>

</html>