<?php

include('include/include_vtt.php');
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
echo $twig->render('vtt.twig', [
    'titre_page' => 'Enduro',
    'titre_nav' => 'Enduro : De la vitesse et des sensations fortes ! ',
    'langage_anglais' => '01_enduro_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'titres_articles' => $titres_articles["page3"],
    'aside' => $aside["page3"],
    'textes' => $textes["page3"],
    'tableaux' => $tableaux["page3"], 
    'conclusion' => $conclusion["page3"], 
    'noschoix' => $noschoix["page3"]
    ]);