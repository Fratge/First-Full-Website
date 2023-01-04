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
    'titre_page' => 'DownHill',
    'titre_nav' => 'Downhill : A sport for those who love speed!',
    'langage_francais' => '01_descente.php', // Redirige vers la page en français lorsque le drapeau français est cliqué
    'titres_articles' => $titres_articles["page2"],
    'aside' => $aside["page2"],
    'textes' => $textes["page2"],
    'tableaux' => $tableaux["page2"], 
    'conclusion' => $conclusion["page2"], 
    'noschoix' => $noschoix["page2"]
    ]);