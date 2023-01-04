<?php

include('include/include_electriques.php');
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
echo $twig->render('electriques.twig', [
    'titre_page' => 'Pliants',
    'titre_nav' => 'Vélos pliants : Utilité, simplicité et rapidité !',
    'langage_anglais' => '02_pliants_en.php', // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    'textes' => $textes["page1"]
    ]); 