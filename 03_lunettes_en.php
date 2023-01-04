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
    // Première partie
    'titre_page' => 'Glasses',
    'titre_nav' => 'The Glasses : Important not to disturb the view!',
    'langage_francais' => '03_lunettes.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'textes' => $textes["page4"],
    'nom_image' => $nom_image["page4"],
    'tableau_principale' => $tableau_principale["page4"], 
    'liens' => $liens["page4"],
    ]);