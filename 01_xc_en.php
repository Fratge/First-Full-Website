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
    'titre_page' => 'XC',
    'titre_nav' => 'MTB XC : Some speed, and competition !',
    'langage_francais' => '01_xc.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'titres_articles' => $titres_articles["page5"],
    'aside' => $aside["page5"],
    'textes' => $textes["page5"],
    'tableaux' => $tableaux["page5"], 
    'conclusion' => $conclusion["page5"], 
    'noschoix' => $noschoix["page5"]
    ]);