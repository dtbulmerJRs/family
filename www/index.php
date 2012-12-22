<?php
// Preset constants
parse_ini_file('../config.ini');

// The framework
require_once 'Slim/Slim.php';

// The template engine
require_once 'TwigView.php';
TwigView::$twigExtensions = array(
  'Twig_Extensions_Slim',
);
TwigView::$twigDirectory = 'Slim/Twig';

// The mysql wrapper
require_once 'idiorm.php';

// initialize app
$app = new Slim(array('view' => new TwigView(), 'mode' => ini_get('app.mode')));

// Load the routes
require_once 'routes.php';

$app->run();
