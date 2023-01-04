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
    'titre_page' => 'Freeride',
    'titre_nav' => 'Freeride : The bike, but anywhere and without rules !',
    'langage_francais' => '01_freeride.php', // Redirige vers la page en français lorsque le drapeau français est cliqué
    'titres_articles' => $titres_articles["page4"],
    'aside' => $aside["page4"],
    'textes' => $textes["page4"],
    'tableaux' => $tableaux["page4"], 
    'conclusion' => $conclusion["page4"], 
    'noschoix' => $noschoix["page4"]
    ]);