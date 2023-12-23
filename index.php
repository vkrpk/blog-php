<?php
$titre = 'Mon blog';
include_once 'layout/header.php';

if (!empty($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
} else {
    $pseudo = 'visiteur';
}
?>


<div class="jumbotron">
    <h1 class="display-4">Bienvenue sur blog-php</h1>
    <p class="lead">Bonjour <?php echo $pseudo; ?>,</p>
    <hr class="my-2">
    <p>Découvrez un monde de connaissances et de découvertes. Sur notre site, nous nous efforçons de partager des informations utiles et intéressantes pour tous nos lecteurs. Que vous soyez passionné par la science, l'art, la technologie ou la culture, il y a toujours quelque chose de nouveau et d'excitant à explorer.</p>
</div>


<h2>Qui sommes-nous ?</h2>
<p class="my-4">
    Nous sommes une équipe de rédacteurs enthousiastes et dévoués, animés par la passion de l'écriture et du partage de connaissances. Chaque jour, nous parcourons le monde de l'information pour vous apporter des articles frais, pertinents et enrichissants.
</p>

<?php include_once 'layout/footer.php';?>