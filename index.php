<?php
require 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__);
$twig = new Twig_Environment($loader, array());
$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
if (!$name) {
    $name = "Mercury, Venus, Mars, Jupiter, Saturn, Uranus & Neptune.";
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];
echo $twig->render('index.twig', array(
    'name' => $name,
    'planets' => $planets,
));