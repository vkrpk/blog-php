<?php
$titre = 'Mon blog';
include_once 'layout/header.php';

if (!empty($_SESSION['pseudo'])) $pseudo = $_SESSION['pseudo'];
else $pseudo = 'inconnu';

?>


<div class="jumbotron">
    <h1 class="display-4">Bienvenue sur mon blog</h1>
    <p class="lead">Bonjour <?php echo $pseudo; ?></p>
    <hr class="my-2">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, nulla culpa esse autem repellat distinctio
        exercitationem consequatur tenetur tempore deserunt placeat enim. Laborum optio, dolor rerum mollitia
        voluptates tenetur consequatur!
        Numquam omnis dolorem quaerat vero explicabo! Laudantium tempore odio autem atque deserunt! Veniam,
        facilis cumque quibusdam maxime in nam cum qui quisquam minus ducimus. Veniam iure totam architecto quod
        quia.
        Esse eveniet in nam distinctio, deserunt ex animi ad dolores quasi nihil minima repellat delectus,
        quibusdam nobis doloribus nulla laboriosam, eligendi quisquam possimus ab porro tenetur numquam. Libero,
        harum quo!
        Aliquid dolore excepturi laboriosam, rem explicabo pariatur dolorum fuga ipsam cupiditate ipsa, totam
        vel iure harum doloremque incidunt blanditiis quae quasi sapiente sit! Ab ex asperiores voluptatem
        placeat quae aspernatur.</p>
</div>


<h2>Qui suis-je ?</h2>
<p class="my-4">
    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi laborum eligendi exercitationem facilis
        rerum nihil deserunt ut, officiis magnam praesentium fugiat optio deleniti repudiandae. Blanditiis culpa
        inventore vel aspernatur quasi!</span>
    <span>Enim iste nam quos modi laboriosam fugit pariatur expedita quasi sit blanditiis est inventore dolorem
        similique, reiciendis tenetur neque temporibus nulla incidunt repellat quae, sapiente rerum saepe
        officia! Quas, dolores!</span>
    <span>Corporis repellendus praesentium nulla suscipit amet ex neque molestias illo dolores soluta officiis
        quasi pariatur dolore ratione quaerat rerum id recusandae, temporibus doloremque, hic similique et
        deleniti! Et, dolores itaque?</span>
    <span>Iure laboriosam quibusdam nesciunt consectetur labore inventore neque quasi. Recusandae saepe
        explicabo voluptate, praesentium quidem porro officia earum laboriosam libero. Distinctio exercitationem
        atque placeat rerum reprehenderit unde mollitia nam architecto.</span>
    <span>In natus nihil distinctio impedit a fugiat ea, odio dolor est, rem dolorum atque molestias! Adipisci
        numquam suscipit iure asperiores nemo! Doloribus sed voluptate unde, iure nulla nam quibusdam
        eligendi?</span>
</p>

<?php include_once 'layout/footer.php'; ?>