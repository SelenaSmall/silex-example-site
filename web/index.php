<?php
date_default_timezone_set('Pacific/Auckland');

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

	# debug mode
	$app['debug'] = true;

/**
 * Register Doctrine Service for db_interactions
 *
 * ORM = entities etc (Object Relational Mapping)
 * DBAL = access to db
 */
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'dbname' 	=> '',
        'host' 		=> '',
        'user' 		=> '',
        'password' 	=> '',
    ),
));

/**
 * Get all Items from item table
 */
$app->get('/item/{id}', function ($id) use ($app) {
    $sql = "SELECT * FROM items WHERE id = ?";
    $ticket = $app['db']->fetchAssoc($sql, array((int) $id));

    return  "<p>Item: {$items['item_name']} </p>".
            "<p>Detail: {$item['item_detail']}</p>";
});

/**
 * Register Twig Service for views
 */
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/Resources/views',
));

/**
 * Render Base view
 */
$app->get('/base', function () use ($app) {
    return $app['twig']->render('base.html.twig');
});

$app->run();
