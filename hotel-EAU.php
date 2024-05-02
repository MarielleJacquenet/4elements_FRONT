<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- include des parties communes du head pour l'ensemble des pages -->
    <?php include("parts/head.php"); ?>

    <!-- title et description propres à chaque page -->
    <title>L'hôtel EAU, situé dans le Pacifique appartient au groupe 4 Eléments</title>
    <meta name="description" content="Découvrez l'hôtel de luxe EAU situé dans un environnement exceptionnel et insolite qui se fond dans la nature et vous offre une expérience unique à l'écart du tourisme de masse">
</head>

<body>
    <?php include('parts/header.php'); ?>
    <main id="hotel">
        <?php include('parts/menu-lateral.php'); ?>
        <?php include('parts/fleche-retour-haut.php'); ?>
        <div class="cadre-header">
        </div>
        <div id="sommaire">
            <div class="container small-container flex">
                <!-- gestion des ancres en javascript à cause du décalage lié au header fixe -->
                <p onclick="decaleAncre('description')" onmouseover="simuleSurvolLien(this)" onmouseout="simuleStopSurvolLien(this)">Description</p>
                <p onclick="decaleAncre('localisation')" onmouseover="simuleSurvolLien(this)" onmouseout="simuleStopSurvolLien(this)">Localisation</p>
                <p onclick="decaleAncre('services')" onmouseover="simuleSurvolLien(this)" onmouseout="simuleStopSurvolLien(this)">Services et activités</p>
                <p onclick="decaleAncre('avis')" onmouseover="simuleSurvolLien(this)" onmouseout="simuleStopSurvolLien(this)">Avis clients</p>
                <p onclick="decaleAncre('evaluations')" onmouseover="simuleSurvolLien(this)" onmouseout="simuleStopSurvolLien(this)">Evaluations</p>
            </div>
        </div>
        <div class="container small-container">
            <div class="fil-ariane flex small-none">
                <a href="index.php" title="Retour à la page d'accueil">Accueil ></a>
                <p>&nbsp;&nbsp;</p>
                <a href="enconstruction.php" title="Découvrez tous les hôtels 4 Eléments">Nos hôtels ></a>
                <p>&nbsp;&nbsp;</p>
                <p class="inline-block">Hôtel EAU</p>
            </div>
            <div class="flex">
                <article class="large-75 small-100">
                    <h1 class="text-center">hotel eau</h1>
                    <div class="flex large-100 justify-between">
                        <img src="img/hotel-eau/chambre-eau.jpg" alt="Photo de la chambre" class="large-50 small-100">
                        <div class="large-50 small-none right-16">
                            <div class="large-100 flex justify-between">
                                <img src="img/hotel-eau/ile-pacifique-eau.jpg" alt="Photo de l'île" class="large-50">
                                <img src="img/hotel-eau/vue-sous-eau.jpg" alt="Photo extérieure du complexe" class="large-50">
                            </div>
                            <div class="large-100 flex justify-between top-16">
                                <img src="img/hotel-eau/suiteliving-eau.jpg" alt="Photo de la salle à manger" class="large-50 ">
                                <img src="img/hotel-eau/library-eau.jpg" alt="Photo de la bibliothèque" class="large-50">
                            </div>
                        </div>
                    </div>
                    <a href="enconstruction.php" title="Voir toutes les photos de l'hôtel EAU" class="lien-special">Voir toutes les photos</a>
                    <div id="description">
                        <h2>Description</h2>
                        <p>L'hôtel Eau est située sur une île de 2 kilomètres carrés très exactement équidistante de Vladivostok et de Los Angeles. C'est le milieu du Pacifique. Vous y disposerez de votre plage, de votre bateau et de votre majordome privés. Votre chambre est un caisson immergé à deux mètres sous l'eau.</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et fuga id officia, repudiandae vitae sit iure alias voluptates quod ea cumque in mollitia laborum? Neque repellendus ut ex unde quaerat.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum ipsa, voluptatum obcaecati nobis iste dignissimos perferendis culpa deleniti, impedit quidem delectus aperiam repellendus, eos esse omnis quas. Tenetur, culpa!
                        </p>
                    </div>
                    <div id="localisation">
                        <h2>Localisation</h2>
                        <div class="flex">
                            <div class="adresse-hotel large-37">
                                <h3>hotel eau</h3>
                                <p class="margin0">Lorem ipsum rue</p>
                                <p class="margin0">42000 Lorem ipsum Ville</p>
                                <p>PAYS</p>
                                <a href="tel:0055123123" title="Nous contacter par téléphone" class="inline-block margin-bottom">Tel : 00 55 123 123</a><br>
                                <a href="mailto:hotel.air@toto.com" title="Nous contacter par mail" class="italic">hotel.air@toto.com</a>
                            </div>
                            <img src="img/hotel-eau/google-map.jpg" alt="Trouver l'hôtel avec Google Map" class="large-37">
                        </div>
                    </div>
                    <div id="services">
                        <h2>Services et activités</h2>
                        <p class="chapeau">Sur place</p>
                        <div class="flex ligne-services large-75">
                            <div class="flex large-25">
                                <div class="large-10">
                                    <img src="img/hotel-eau/Icon-material-local-bar.png" alt="Picto bar" class="img-responsive">
                                </div>
                                <p class="large-75 left-8">bar</p>
                            </div>
                            <div class="flex large-25">
                                <div class="large-10">
                                    <img src="img/hotel-eau/Icon-material-free-breakfast.png" alt="Picto petit-déjeuner" class="img-responsive">
                                </div>
                                <p class="large-75 left-8">petit-déjeuner</p>
                            </div>
                            <div class="flex large-25">
                                <div class="large-10">
                                    <img src="img/hotel-eau/Icon-material-room-service.png" alt="Picto room-service" class="img-responsive">
                                </div>
                                <p class="large-75 left-8">room-service</p>
                            </div>
                            <div class="flex large-25">
                                <div class="large-10">
                                    <img src="img/hotel-eau/Icon-awesome-wifi.png" alt="Picto  gratuit" class="img-responsive">
                                </div>
                                <p class="large-75 left-8">wifi</p>
                            </div>
                        </div>
                        <p class="chapeau top-24">A proximité</p>
                        <div class="flex ligne-services large-75">
                            <div class="flex large-25">
                                <div class="large-10">
                                    <img src="img/hotel-eau/Icon-map-restaurant.png" alt="Picto restaurant" class="img-responsive">
                                </div>
                                <p class="large-75 left-8">restaurant</p>
                            </div>
                            <div class="flex large-25">
                                <div class="large-10">
                                    <img src="img/hotel-eau/Icon-map-gym.png" alt="Picto salle de sport" class="img-responsive">
                                </div>
                                <p class="large-75 left-8">salle de sport</p>
                            </div>
                            <div class="flex large-25">
                                <div class="large-10">
                                    <img src="img/hotel-eau/Icon-map-boat-tour.png" alt="Picto croisière" class="img-responsive">
                                </div>
                                <p class="large-75 left-8">croisières</p>
                            </div>
                        </div>
                        <a href="enconstruction.php" title="Voir tous les services proposés" class="large-50 btn btn2 margin-top-16">Voir tous les services</a>
                    </div>

                    <div id="avis">
                        <h2>Avis clients</h2>
                        <div class="avis large-75 small-none">
                            <div class="flex align-center">
                                <img src="img/hotel-eau/avis1.png" alt="Avis 4/5">
                                <p class="nom-avis">Nomclient</p>
                                <p class="date-avis italic">03/01/2022</p>
                            </div>
                            <p class="chapeau">Lorem ipsum</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quaerat a est nulla commodi suscipit aspernatur, vero pariatur sint laboriosam fugiat hic facilis esse enim distinctio magni laborum alias praesentium.
                                Provident et expedita consequuntur, odio laudantium beatae necessitatibus nihil natus obcaecati, mollitia similique quis nam adipisci esse reiciendis exercitationem dolore architecto suscipit consequatur alias veniam blanditiis cum! Nulla, commodi veritatis.
                            </p>
                        </div>
                        <div class="avis large-75 small-none">
                            <div class="flex align-center">
                                <img src="img/hotel-eau/avis1.png" alt="Avis 4/5">
                                <p class="nom-avis">Nomclient</p>
                                <p class="date-avis italic">03/01/2022</p>
                            </div>
                            <p class="chapeau">Lorem ipsum</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quaerat a est nulla commodi suscipit aspernatur, vero pariatur sint laboriosam fugiat hic facilis esse enim distinctio magni laborum alias praesentium.
                                Provident et expedita consequuntur, odio laudantium beatae necessitatibus nihil natus obcaecati, mollitia similique quis nam adipisci esse reiciendis exercitationem dolore architecto suscipit consequatur alias veniam blanditiis cum! Nulla, commodi veritatis.
                            </p>
                        </div>
                        <div class="avis large-75 small-100">
                            <div class="flex align-center">
                                <img src="img/hotel-eau/avis1.png" alt="Avis 4/5">
                                <p class="nom-avis">Nomclient</p>
                                <p class="date-avis italic">03/01/2022</p>
                            </div>
                            <p class="chapeau">Lorem ipsum</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quaerat a est nulla commodi suscipit aspernatur, vero pariatur sint laboriosam fugiat hic facilis esse enim distinctio magni laborum alias praesentium.
                                Provident et expedita consequuntur, odio laudantium beatae necessitatibus nihil natus obcaecati, mollitia similique quis nam adipisci esse reiciendis exercitationem dolore architecto suscipit consequatur alias veniam blanditiis cum! Nulla, commodi veritatis.
                            </p>
                        </div>
                        <a href="enconstruction.php" title="Voir les derniers avis de nos clients" class="large-50 btn btn2  margin-top-16">Voir les 20 avis les plus récents</a>
                    </div>

                    <div id="evaluations">
                        <h2>Evaluations</h2>
                        <img src="img/hotel-eau/evaluations-hotel.jpg" alt="Tableau des évaluations" class="img-responsive">
                    </div>
                </article>

                <aside class="large-25 small-100">
                    <p class="italic">Chambre à partir de : 345€ la nuit</p>
                    <form method="post" action="traitement2.php">
                        <div class="flex align-center margin-bottom ">
                            <div class="large-16">
                                <img src="img/large/Icon-feather-calendar.png" alt="Entrez votre date d'arrivée" class="img-responsive">
                            </div>
                            <div class="large-84">
                                <input name="arrivee" type="text" required placeholder="Arrivée" onfocus="(this.type='date')">
                            </div>
                        </div>
                        <div class="flex align-center margin-bottom ">
                            <div class="large-16">
                                <img src="img/large/Icon-feather-calendar.png" alt="Entrez votre date de départ" class="img-responsive">
                            </div>
                            <div class="large-84">
                                <input name="depart" type="text" required placeholder="Départ" onfocus="(this.type='date')">
                            </div>
                        </div>
                        <div class="flex align-center margin-bottom">
                            <div class="large-16">
                                <img src="img/hotel-eau/Icon-ionic-md-bed.png" alt="Entrez le nombre de chambres" class="img-responsive">
                            </div>
                            <div class="large-84">
                                <select name="nb-chambres" id="nb-chambres">
                                    <option value="1" selected>1 chambre</option>
                                    <option value="2">2 chambres</option>
                                    <option value="3">3 chambres</option>
                                    <option value="4">4 chambres</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex align-center margin-bottom">
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
                        <button class="btn btn2">Réserver</button>
                    </form>
                </aside>
            </div>
        </div>
    </main>
    <?php include('parts/footer.php'); ?>
    <script src="./js/fonctions.js"></script>
    <script src="./js/fleche-retour-haut.js"></script>
    <script src="./js/ancres.js"></script>
</body>

</html>