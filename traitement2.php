<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include des parties communes du head pour l'ensemble des pages -->
    <?php include("parts/head.php"); ?>

    <title>Traitement du formulaire</title>
    <meta name="description" content="Cette page affiche les données du formulaire envoyé">
</head>

<body>
    <?php include('parts/header.php'); ?>
    <div class="cadre-header"></div>
    <div class="text-center">
        <h1>Confirmation de réservation</h1>
        <div id="confirmation">
            <pre>
                <p><span class="bold">Hôtel :</span> EAU<p>
                <p><span class="bold">Date d'arrivée :</span> <?php echo $_POST["arrivee"]; ?></p>
                <p><span class="bold">Date de départ :</span> <?php echo $_POST["depart"]; ?></p>
                <p><span class="bold">Nombre de personnes :</span> <?php echo $_POST["nb-personnes"]; ?></p>
                <p><span class="bold">Nombre de chambres :</span> <?php echo $_POST["nb-chambres"]; ?></p>
                <p class="bold">Numéro de réservation : AZ-321123 </p>
                <p class="italic"> Pensez à donner votre numéro de réservation pour toute réclamation, modification ou demande d'information</p>
            </pre>
        </div>
    </div>
    <?php include('parts/footer.php'); ?>
    <script src="./js/fonctions.js"></script>
</body>

</html>