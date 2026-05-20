<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Mon Profil MMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Présentation de l'Étudiant</h1>
        <?php include('menu.php'); ?>
    </header>

    <main>
        <section class="profile-card">
            <h2>Informations Personnelles</h2>
            
            <div class="profile-info">
                <p><strong>Nom :</strong> Rabenjason</p>
                <p><strong>Prénom :</strong> Mathieu</p>
                <p><strong>Groupe :</strong> [Ton Groupe - Ex: Groupe 1]</p>
                <p><strong>Identifiant MMI :</strong> [Ton Identifiant MMI]</p>
            </div>
        </section>

        <section class="tp-context">
            <h3>Contexte du TP</h3>
            <p>Ce site web a été développé localement sur le container de développement <code>buts2</code>[cite: 7]. Il est structuré avec PHP pour la gestion des composants communs et stylisé via CSS[cite: 15, 16, 18]. L'objectif final est son déploiement automatisé sur un VPS à l'aide du système de contrôle de version Git[cite: 7, 8].</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 - IUT de Troyes - BUT MMI</p>
    </footer>

</body>
</html>