<?php

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
echo $twig->render('contact_en.twig', [
    'titre_page' => 'Contact',
    'titre_nav' => 'You can contact us by using the form below !',
    'langage_francais' => 'contact.php' // Redirige vers la page en français lorsque le drapeau français est cliqué 
    ]);