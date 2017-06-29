<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/tom.php";


    session_start();

    if (empty($_SESSION['creature-life'])) {
            $_SESSION['creature-life'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

    return $app['twig']->render('Tamagotchi.html.twig', array('creatures' => Tamagotchi::getAll()));

    });

    return $app;

?>
