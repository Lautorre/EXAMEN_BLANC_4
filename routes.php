<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );


// Model etudiant
// add en post et en get
// edit en post et en get
// delete get
// list en get
// show en get

$router->get('liste-etudiants', 'EtudiantsController@liste' ); 
$router->get('ajout-etudiant/add', 'EtudiantsController@add');
$router->post('ajout-etudiant/add', 'EtudiantsController@save');
$router->get('liste-etudiants/{id}/edit','EtudiantsController@edit'); 
$router->post('liste-etudiants/{id}/edit','EtudiantsController@update'); 
$router->get('liste-etudiants/{id}/delete','EtudiantsController@delete');
$router->get('liste-etudiants/{id}','EtudiantsController@show');

// Model cours

$router->get('liste-cours', 'CoursController@liste' );
$router->get('ajout-cours', 'CoursController@add');
$router->post('ajout-cours', 'CoursController@save');
$router->get('liste-cours/{id}/edit','CoursController@edit'); 
$router->post('liste-cours/{id}/edit','CoursController@update'); 
$router->get('liste-cours/{id}/delete','CoursController@delete');
$router->get('liste-cours/{id}','CoursController@show');

// Model inscriptions

$router->get('liste-inscriptions', 'InscriptionsController@liste' );
$router->get('ajout-inscriptions', 'InscriptionsController@add');
$router->post('ajout-inscriptions', 'InscriptionsController@save');
$router->get('liste-inscriptions/{id}/edit','InscriptionsController@edit'); 
$router->post('liste-inscriptions/{id}/edit','InscriptionsController@update'); 
$router->get('liste-inscriptions/{id}/delete','InscriptionsController@delete');
$router->get('liste-inscriptions/{id}','InscriptionsController@show');

// Run it!
$router->run();