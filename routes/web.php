<?php

/**
 * Routes disponibles dans le projet
 * 
 * Format: url => [Controller, méthode]
 */
$routes = [
    // Affiche la page d'accueil
    "index" => ["DefautController", "index"],
    // Affiche le login de la page d'administration
    "login" => ["DefautController", "login"],
    // Traite l'ajout d'un abonné dans la base de donnée
    "insert-subscriber" => ["SubscriberController", "store"],
];
