<!DOCTYPE html>
<html lang="fr text">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Profil Étudiant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Présentation</h1>
        <?php include('menu.php'); ?>
    </header>

    <main>
        <section class="content-box">
            <h2>Informations Étudiant</h2>
            <p><strong>Nom :</strong> Schacher</p>
            <p><strong>Prénom :</strong> Lucas</p>
            <p><strong>TD GH</strong></p>
            <p><strong>Identifiant MMI :</strong>mmi25g12</p>
        </section>

        <section class="content-box">
            <h2>Suivi du Déploiement</h2>
            <p><strong>Mise en ligne :</strong> <?php echo date('d/m/Y H:i:s'); ?></p>
        </section>
    </main>

    <footer>
        <p>BUT MMI - IUT de Troyes</p>
    </footer>

</body>
</html>