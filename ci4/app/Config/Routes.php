<?php
use App\Controllers\News; 
use App\Controllers\Pages;
use App\Controllers\Audience; 
use App\Controllers\Me;

$routes->get('me', [Me::class, 'main']); // About me page

$routes->get('comments', [Audience::class, 'index']); // Main comments page
$routes->get('comments/new', [Audience::class, 'new']); 
$routes->post('comments', [Audience::class, 'create']);          
$routes->get('comments/(:segment)', [Audience::class, 'show']);

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);




