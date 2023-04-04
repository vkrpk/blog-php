<?php

if (
    !empty($_POST['pseudo'])
    && !empty($_POST['email'])
    && !empty($_POST['password'])
    && !empty($_POST['password_conf'])

    && $_POST['password'] === $_POST['password_conf']

    && strlen($_POST['password']) >= 6

    && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
) {

    include_once './fonctions/fonctions_bdd.php';

    createUser();

    header('location: index.php');
    die;

} else {
    echo 'Erreur lors de la saisie des données, veuillez recommencez s\'il vous plaît';
    die;
}
