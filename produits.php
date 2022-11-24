<?php

$title = "Produits";

$view = 'produits';

/**
 * Une donné dynamique qui peut provenir d'une base de données
 * ou d'un fichier
 * ou d'un webservice
 * ...
 */
$products = [
    [
        'name'=> 'Savon magique',
        'description'=> 'Un savon magique, tu seras plus propre que propre',
        'price'=> '150'
    ],
    [
        'name' => 'Licorne empaillée',
        'description' => 'Tu en as besoin. Le dernier spécimen !',
        'price' => '1500000'
    ],
    [
        'name' => 'Voiture de sport tuning',
        'description' => 'Pour toi BG !',
        'price' => '10000'
    ]
];

include('views/layout.phtml');