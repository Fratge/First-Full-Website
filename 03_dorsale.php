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
    'titre_page' => 'Dorsale',
    'titre_nav' => 'La dorsale : Permet d\'éviter de lourd dégats !',
    'langage_anglais' => '03_dorsale_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'textes' => $textes["page3"],
    'nom_image' => $nom_image["page3"],
    'tableau_principale' => $tableau_principale["page3"], 
    'liens' => $liens["page3"],
    ]);