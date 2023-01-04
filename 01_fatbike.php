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
    'titre_page' => 'Fatbike',
    'titre_nav' => 'Fatbike : Le vélo fait pour rouler dans la neige',
    'langage_anglais' => '01_fatbike_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'titres_articles' => $titres_articles["page1"],
    'aside' => $aside["page1"],
    'textes' => $textes["page1"],
    'tableaux' => $tableaux["page1"], 
    'conclusion' => $conclusion["page1"], 
    'noschoix' => $noschoix["page1"]
    ]);