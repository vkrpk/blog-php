<?php
include_once 'fonctions/fonctions_bdd.php';

if (!empty($_GET['id'])) {

	$article = getArticle($_GET['id']);

	if ($article == false) {
		include_once 'erreurs/404.php';
		die;
	}

	$titre = $article['titre'] . ' | Mon blog';

	include_once './layout/header.php';
?>


	<img src="images/<?php echo $article['image']; ?>" alt="<?php echo $article['image_alt']; ?>" class="banner" />

	<small><?php echo $article['image_copyright']; ?></small>

	<h1 class="mb-4"><?php echo $article['titre']; ?></h1>

	<p><?php echo $article['contenu']; ?></p>

<?php include_once 'layout/footer.php';
} else {
	include_once 'erreurs/404.php';
	die;
}
