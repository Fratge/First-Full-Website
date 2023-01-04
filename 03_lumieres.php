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
    'titre_page' => 'Lumières',
    'titre_nav' => 'Les lumières : Pour voir mais aussi être vu !',
    'langage_anglais' => '03_lumieres_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'titres_article' => 'les lumières',
    'textes' => $textes["page5"],
    'nom_image' => $nom_image["page5"],
    'tableau_principale' => $tableau_principale["page5"], 
    'liens' => $liens["page5"],
    ]);