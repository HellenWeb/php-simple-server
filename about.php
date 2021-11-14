<?php

// Modules

require_once 'vendor/autoload.php';
include_once 'templates/components/navbar.php';
include_once 'templates/components/footer.php';

// Default Varibles

$loader = new \Twig\Loader\FilesystemLoader('templates');

// Home Page

$about = new \Twig\Environment($loader);
$aboutTemplates = $about->load('About/index.php');
echo $aboutTemplates->render([
    'title' => 'About Page',
]);
