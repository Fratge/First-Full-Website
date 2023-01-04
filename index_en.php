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
echo $twig->render('index_en.twig', [
    'titre_page' => 'Home',
    'titre_nav' => 'Discover the world of cycling through our web page!',
    'langage_francais' => 'index.php' // Redirige vers la page en français lorsque le drapeau français est cliqué
    ]);