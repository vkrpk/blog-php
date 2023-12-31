<?php

function connectDB() {
	include __DIR__ . '/../config/config_bdd.php';
	try {
		$bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $user, $password, [
            'charset' => 'utf8',
//            'port' => '3306',
        ]);
		return $bdd;
	} catch (PDOException $e) {
		include __DIR__ . '/../errors/500.php';
		die();
	}
}

function getArticle($id = null) {

	if (!empty($id)) {

		$bdd = connectDB();

		$statement = $bdd->prepare('SELECT * FROM articles WHERE id = ?');

		$statement->bindParam(1, $id);

		if ($statement->execute()) return $statement->fetch();

		else return false;
	} else {

		$bdd_pdo = connectDB();
		$resultat = $bdd_pdo->query('SELECT * FROM articles');

		$variable_article = array();

		while ($article = $resultat->fetch()) {
			$variable_article[] = $article;
		}

		return $variable_article;
	}
}


function createUser() {

	if (empty($_POST['image'])) $image = null;	
	else {	
		if (filter_var($_POST['image'], FILTER_VALIDATE_URL)) $image = $_POST['image'];	
		else $image = null;		
	}

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


	$bdd = connectDB();

	$requete = 'INSERT INTO utilisateurs (pseudo, email, image, password) VALUE (?, ?, ?, ?)';

	$statement = $bdd->prepare($requete);

	$statement->bindParam(1, $_POST['pseudo']);
	$statement->bindParam(2, $_POST['email']);
	$statement->bindParam(3, $image);
	$statement->bindParam(4, $password);

	$statement->execute();
}


function getUtilisateurByPseudo($pseudo) {

	$requete = 'SELECT * FROM utilisateurs WHERE pseudo = ?';

	$bdd = connectDB();

	$statement = $bdd->prepare($requete);

	$statement->bindParam(1, $pseudo);

	$statement->execute();

	$utilisateur = $statement->fetch();	

	return $utilisateur;
}
