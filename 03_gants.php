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
    'titre_page' => 'Gants',
    'titre_nav' => 'Les gants : Il sont indispensables lors de vos sorties !',
    'langage_anglais' => '03_gants_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'textes' => $textes["page2"],
    'nom_image' => $nom_image["page2"],
    'tableau_principale' => $tableau_principale["page2"], 
    'liens' => $liens["page2"]
    ]);