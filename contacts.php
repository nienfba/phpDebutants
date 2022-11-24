<?php

$title = "Contacts";

$view = 'contact';

// Si le formulaire est posté !
if(!empty($_POST)) {
    echo 'Bravo le form a été posté vers le serveur';
    var_dump($_POST);
    // je n'ai plus qu'à vérif ça et à le sauvegarder en base
}

include('views/layout.phtml');
