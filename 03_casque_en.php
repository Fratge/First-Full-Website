<?php

include('include/include_equipements_en.php');
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
echo $twig->render('equipements_en.twig', [
    'titre_page' => 'Helmet',
    'titre_nav' => 'The helmet : The most important protection!',
    'langage_francais' => '03_casque.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'textes' => $textes["page1"],
    'nom_image' => $nom_image["page1"],
    'tableau_principale' => $tableau_principale["page1"], 
    'liens' => $liens["page1"],
    ]);