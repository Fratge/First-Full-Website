<?php

include('include/include_electriques_en.php');
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
echo $twig->render('electriques_en.twig', [
    'titre_page' => 'APB',
    'titre_nav' => 'APB : A two-in-one bike to go anywhere!',
    'langage_francais' => '02_vtc.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'textes' => $textes["page3"]
    ]);