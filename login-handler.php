<?php

include_once 'fonctions/fonctions_bdd.php';
include_once 'fonctions/mes_fonctions.php';
session_start();


if (
	!empty($_POST['pseudo'])
	&& !empty($_POST['password'])
) {

	$utilisateur = getUtilisateurByPseudo($_POST['pseudo']);

	if ($utilisateur === false) {		

		$_SESSION['erreur'] = 'Mauvais pseudo';
		
		header('location: login.php');	
		die;
	} else {

		if (password_verify($_POST['password'], $utilisateur['password'])) {

			createSession($utilisateur);

			if ($_POST['rester-connecte'] == 'true') {		
				$dans_un_an = time() + 365 * 24 * 60 * 60;

				setcookie('user_id', $utilisateur['id'], $dans_un_an);
			}

			header('location: index.php');
			die;
		} else {
			$_SESSION['erreur'] = 'Mauvais mot de passe';
			
			header('location: login.php');	
			die;
		}
	}
} else {
	$_SESSION['erreur'] = 'Il manque un champ';
	
	header('location: login.php');	
	die;
}
