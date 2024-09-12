<?php

//return [
//    
//    '/' => 'controllers/index.php',
//    '/about' => 'controllers/about.php',
//    '/notes' => 'controllers/notes/index.php',
//    '/note' => 'controllers/notes/show.php',
//    '/notes/create' => 'controllers/notes/create.php',
//    '/contact' => 'controllers/contact.php',
//    
//];


$router->get('/', 'controller/index.php');
$router->get('/about', 'controller/about.php');
$router->get('/conatct', 'controller/contact.php');


$router->get('/notes', 'controller/notes/index.php');
$router->get('/note', 'controller/notes/show.php');
$router->get('/notes/create', 'controller/notes/create.php');