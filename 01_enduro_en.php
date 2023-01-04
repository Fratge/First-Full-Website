<?php

include('include/include_vtt_en.php');
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
echo $twig->render('vtt_en.twig', [
    'titre_page' => 'Enduro',
    'titre_nav' => 'Enduro: A Lot of speed and strong feelings ! ',
    'langage_francais' => '01_enduro.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'titres_articles' => $titres_articles["page3"],
    'aside' => $aside["page3"],
    'textes' => $textes["page3"],
    'tableaux' => $tableaux["page3"], 
    'conclusion' => $conclusion["page3"],
    'noschoix' => $noschoix["page3"] 
    ]);