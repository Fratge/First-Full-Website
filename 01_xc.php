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
    'titre_page' => 'XC',
    'titre_nav' => 'VTT XC : De la vitesse, de la compétition  !',
    'langage_anglais' => '01_xc_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'titres_articles' => $titres_articles["page5"],
    'aside' => $aside["page5"], 
    'textes' => $textes["page5"],
    'tableaux' => $tableaux["page5"], 
    'conclusion' => $conclusion["page5"], 
    'noschoix' => $noschoix["page5"]
    ]);