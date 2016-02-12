<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
        ));

    // routes

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'contacts' => Contact::getAll()
        ));
    });

    $app->post("/create_contact", function() use ($app) {
            $new_contact = new Contact($_POST['name'], $_POST['phone'], $_POST['street'], $_POST['city']);
            $new_contact->save();
            return $app['twig']->render('created.html.twig', array('newcontact' => $new_contact));
        });

    return $app;
?>
