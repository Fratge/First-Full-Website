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
    'titre_page' => 'Fatbike',
    'titre_nav' => 'Fatbike : The bike made to ride in the snow',
    'langage_francais' => '01_fatbike.php', // Redirige vers la page en français lorsque le drapeau français est cliqué
    'titres_articles' => $titres_articles["page1"],
    'aside' => $aside["page1"],
    'textes' => $textes["page1"],
    'tableaux' => $tableaux["page1"], 
    'conclusion' => $conclusion["page1"], 
    'noschoix' => $noschoix["page1"]
    ]);