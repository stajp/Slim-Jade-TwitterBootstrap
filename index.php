<?php

//bootstrap the application
require_once 'bootstrap.php';

//set up your routes
$app->get('/', function() use ($app) {
    $app->render('first');
});

//let Slim work its magic
$app->run();
