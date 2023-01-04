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
    'titre_page' => 'Gloves',
    'titre_nav' => 'The Gloves : They are indispensable during your outings!',
    'langage_francais' => '03_gants.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'textes' => $textes["page2"],
    'nom_image' => $nom_image["page2"],
    'tableau_principale' => $tableau_principale["page2"], 
    'liens' => $liens["page2"],
    ]);