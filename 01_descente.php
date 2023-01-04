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
    'titre_page' => 'Descente',
    'titre_nav' => 'Descente : Une sport pour ceux qui aiment la vitesse !',
    'langage_anglais' => '01_descente_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'titres_articles' => $titres_articles["page2"],
    'aside' => $aside["page2"],
    'textes' => $textes["page2"],
    'tableaux' => $tableaux["page2"], 
    'conclusion' => $conclusion["page2"], 
    'noschoix' => $noschoix["page2"]
    ]);