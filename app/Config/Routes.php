<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('contact', 'PagesController::contact');
$routes->post('contactsubmit','Contact::submit');
$routes->get('carrer','CarrerController::carrer');
$routes->post('CarrerSubmit', 'CarrerController::submitJobForm');
$routes->get('services','PagesController::services');

// Care32 PRD Static Pages
$routes->get('about', 'PagesController::about');
$routes->get('doctors', 'PagesController::doctors');
$routes->get('gallery', 'PagesController::gallery');
$routes->get('pricing', 'PagesController::pricing');
$routes->get('reviews', 'PagesController::reviews');
$routes->get('blog', 'PagesController::blog');
$routes->get('faq', 'PagesController::faq');
