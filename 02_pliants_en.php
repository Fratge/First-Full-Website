<?php

include('include/include_electriques_en.php');
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
echo $twig->render('electriques_en.twig', [
    'titre_page' => 'Folding Bikes',
    'titre_nav' => 'Folding Bikes : Usefull, simplicity and speed!',
    'langage_francais' => '02_pliants.php', // Redirige vers la page en français lorsque le drapeau français est cliqué 
    'textes' => $textes["page1"]
    ]);