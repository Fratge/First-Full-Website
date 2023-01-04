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
    'titre_page' => 'Casque',
    'titre_nav' => 'Le casque : La protection la plus importante !',
    'langage_anglais' => '03_casque_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'textes' => $textes["page1"],
    'nom_image' => $nom_image["page1"],
    'tableau_principale' => $tableau_principale["page1"], 
    'liens' => $liens["page1"],
    ]);