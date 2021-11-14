<?php

// Modules

require_once 'vendor/autoload.php';

// Default Varibles

$loader = new \Twig\Loader\FilesystemLoader('templates');

// Home Page

$home = new \Twig\Environment($loader);
$homeTemplates = $home->load('Home/index.php');
echo $homeTemplates->render([
    'title' => 'Home Page'
]);
