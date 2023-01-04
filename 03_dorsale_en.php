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
    'titre_page' => 'Dorsal',
    'titre_nav' => 'The Dorsal : Allows to avoid heavy damages !',
    'langage_francais' => '03_dorsale.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'textes' => $textes["page3"],
    'nom_image' => $nom_image["page3"],
    'tableau_principale' => $tableau_principale["page3"], 
    'liens' => $liens["page3"],
    ]);