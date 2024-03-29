<?php
$titre = 'Créer un nouveau  article | Mon blog';
include_once 'layout/header.php'; ?>

<h1 class="mb-4">Créer un nouvel article</h1>

<form action="creer-article-handler.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="titre">Titre</label>
		<input type="text" class="form-control" name="titre" id="titre" aria-describedby="titre-help" placeholder="Titre" required autofocus>
		<small id="titre-help" class="form-text text-muted">Le titre de l'article.</small>
	</div>


	<div class="custom-file form-group mb-4">
		<label class="custom-file-label" for="image">Image</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="5242880">
		<input type="file" class="custom-file-input" name="image" id="image" aria-describedby="image-help" placeholder="Image" required>
		<small id="image-help" class="form-text text-muted">L'image d'illustration de l'article.</small>
	</div>


	<div class="form-group">
		<label for="image_alt">Alternative textuelle</label>
		<input type="text" class="form-control" name="image_alt" id="image_alt" aria-describedby="image_alt-help" placeholder="Alternative textuelle" required>
		<small id="image_alt-help" class="form-text text-muted">L'alternative textuelle de l'image d'illustration de l'article.</small>
	</div>


	<div class="form-group">
		<label for="image_copyright">Copyright</label>
		<textarea class="form-control" name="image_copyright" id="image_copyright" aria-describedby="image_copyright-help" rows="5" required></textarea>
		<small id="image_copyright-help" class="form-text text-muted">Le HTML qui sert de copyright à l'image d'illustration de l'article.</small>
	</div>


	<div class="form-group">
		<label for="contenu">Contenu</label>
		<textarea class="form-control" name="contenu" id="contenu" aria-describedby="contenu-help" rows="5" required></textarea>
		<small id="contenu-help" class="form-text text-muted">Le contenu de l'article.</small>
	</div>


	<button type="submit" class="btn btn-primary">Nouvel article</button>
</form>


<?php include_once 'layout/footer.php'; ?>