<?php

$title = "Equipe";

// La page est paramétrée par un queryString...
if(!empty($_GET['display']) && $_GET['display'] == 'direction')
    $view = 'direction';
else
    $view = 'equipe';

include('views/layout.phtml');