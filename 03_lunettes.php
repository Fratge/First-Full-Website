<?php

include('include/include_equipements.php');
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
echo $twig->render('equipements.twig', [
    'titre_page' => 'Lunettes',
    'titre_nav' => 'Les lunettes : Important pour ne pas gêner la vue !',
    'langage_anglais' => '03_lunettes_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'titres_article' => 'les lunettes',
    'textes' => $textes["page4"],
    'nom_image' => $nom_image["page4"],
    'tableau_principale' => $tableau_principale["page4"], 
    'liens' => $liens["page4"],
    ]);