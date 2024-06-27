<?php

/**
 * Routes disponibles dans le projet
 */
$routes = [
    // Affiche la page d'accueil
    "index" => ["DisplayController", "index"],
    // Affiche la page de connexion à l'administration
    "login" => ["DisplayController", "login"],
    // Affiche la page d'accueil de l'administration
    "admin" => ["DisplayController", "admin"],
    // Traite l'ajout d'un abonné à l'infolettre
    "insert-subscriber" => ["SubscriberController", "store"],
    // Traite la connexion d'un membre
    "connect-member" => ["MemberController", "connect"],
];
