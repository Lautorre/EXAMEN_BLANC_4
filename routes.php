<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );


// Model etudiant

$router->get('liste-etudiants', 'EtudiantsController@liste' );
$router->get('ajout-etudiant', 'EtudiantsController@add');
$router->post('ajout-etudiant', 'EtudiantsController@save');
$router->get('liste-etudiants/{id}/edit','EtudiantsController@edit'); 
$router->post('liste-etudiants/{id}/edit','EtudiantsController@update'); 
$router->get('liste-etudiants/{id}/delete','EtudiantsController@delete');
$router->get('liste-etudiants/{id}','EtudiantsController@show');

// Run it!
$router->run();