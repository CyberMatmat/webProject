<?php
// Vérifier la présence et la valeur du cookie "status"
if(isset($_COOKIE['status']) && $_COOKIE['status'] == 'eleve') {
    $gestionLink = ''; // Si l'utilisateur a le cookie "status" avec la valeur "eleve", le lien vers la page de gestion est masqué
} else {
    $gestionLink = '<li><a href="../pages/gestion.php">Gestion</a></li>'; // Sinon, le lien est affiché normalement
}
?>

<nav id="header">
    <a href="/">
        <img src="../assets/img/logoSquare.png" alt="Logo de la CTS en violet">
    </a>
    <ul>
        <li><a href="../pages/stages.php">Stages</a></li>
        <li><a href="../pages/entreprises.php">Entreprises</a></li>
        <li><a href="../pages/fav.php">Favoris</a></li>
        <li><a href="../pages/contact.php">A propos</a></li>
        <?php echo $gestionLink; ?> <!-- Affiche ou masque le lien vers la page de gestion en fonction de la valeur du cookie "status" -->
    </ul>
    <a href="../pages/user.php">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" alt="user svg">
            <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
        </svg>
    </a>
</nav>