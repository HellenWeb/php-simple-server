<?php

// Modules

require_once 'vendor/autoload.php';
include_once 'templates/components/navbar.html';
include_once 'templates/components/footer.html';

// Default Varibles

$loader = new \Twig\Loader\FilesystemLoader('templates');

// Home Page

$about = new \Twig\Environment($loader);
$aboutTemplates = $about->load('About/index.html');
echo $aboutTemplates->render([
    'title' => 'About Page',
]);
