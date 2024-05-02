<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- include des parties communes du head pour l'ensemble des pages -->
    <?php include("parts/head.php"); ?>

    <!-- title et description propres à chaque page -->
    <title>Prenez contact avec 4 Elements pour des renseignements ou une réservation</title>
    <meta name="description" content="N'hésitez pas à nous contacter pour obtenir des conseils, des informations, nos hôtels EAU, FEU, AIR et MER sont à votre écoute ">
</head>

<body>
    <?php include('parts/header.php'); ?>

    <main>
        <?php include('parts/menu-lateral.php'); ?>
        <div class="cadre-header">
        </div>
        <div id="contact">
            <div class="container">
                <h1>Contactez-nous</h1>
                <form method="post" action="traitement.php" onsubmit="return verifFormContact()">
                    <fieldset>
                        <div class="flex justify-between">
                            <div class="large-50 small-100">
                                <label>
                                    Nom
                                </label>
                                <input type="text" name="nom">
                                <p class="erreur" id="p-erreur-nom"></p>
                            </div>
                            <div class="large-50 small-100">
                                <label>
                                    Prénom
                                </label>
                                <input type="text" name="prenom">
                                <p class="erreur" id="p-erreur-prenom"></p>
                            </div>
                        </div>
                        <div class="large-100">
                            <label>
                                E-mail <span>*</span>
                            </label>
                            <input type="text" name="email" id="email" onchange="verifMail(this)"> <!-- pas email et pas de required car gestion des saisies en js -->
                            <p class="erreur" id="p-erreur-email"></p>
                        </div>
                        <div class="large-100">
                            <label>
                                Sujet *
                            </label>
                            <input type="text" name="sujet" id="sujet" onchange="verifSujet(this)">
                            <p class="erreur" id="p-erreur-sujet"></p>
                        </div>
                        <div class="large-100">
                            <label>
                                Message *
                            </label>
                            <textarea name="message" id="message" rows="10" placeholder="Votre message..." class="large-100" onchange="verifMessage(this)"></textarea>
                            <p class="erreur" id="p-erreur-message"></p>
                        </div>
                        <div class="flex justify-between">
                            <p class="inline-block"><span>* Champs requis</span></p>
                            <div class="large-25">
                                <input type="submit" value="Valider" class="btn btn2">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>

    <?php include('parts/footer.php'); ?>
    <script src="./js/fonctions.js"></script>
    <script src="./js/formulaire.js"></script>
</body>

</html>