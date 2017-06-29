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
        Tamagotchi::deleteAll();
        return $app['twig']->render('Tamagatchi.html.twig');
    });

    $app->get('/game', function() use ($app) {
        $creature = new Tamagotchi($_GET['name'], 10, 10 , 10);
        $creature->save();

        return $app['twig']->render('game.html.twig', array('start_game' => $creature));
    });

    $app->post('/game', function() use ($app) {
        $creatures = $_SESSION['creature-life'];
        $creature = $creatures[0];

        return $app['twig']->render('game.html.twig', array('start_game' => $creature));
    });

    $app->post('/play', function() use ($app) {
        $creatures = $_SESSION['creature-life'];
        $creature = $creatures[0];

        return $app['twig']->render('play.html.twig', array('tom' => $creature));
    });

    $app->post('/eat', function() use ($app) {
        $creatures = $_SESSION['creature-life'];
        $creature = $creatures[0];

        return $app['twig']->render('eat.html.twig', array('tom' => $creature));
    });

    $app->post('/sleep', function() use ($app) {
        $creatures = $_SESSION['creature-life'];
        $creature = $creatures[0];

        return $app['twig']->render('sleep.html.twig', array('tom' => $creature));
    });

    return $app;

?>
