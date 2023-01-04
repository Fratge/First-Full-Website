<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('index.twig', [
    'titre_page' => 'Accueil',
    'titre_nav' => 'Découvrez le monde du vélo grâce à notre page web !',
    'langage_anglais' => 'index_en.php' // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    ]);