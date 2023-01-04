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
echo $twig->render('contact.twig', [
    'titre_page' => 'Contact',
    'titre_nav' => 'Contactez nous grâce au formulaire ci-dessous !',
    'langage_anglais' => 'contact_en.php' // Redirige vers la page en anglais lorsque le drapeau anglais est cliqué
    ]);