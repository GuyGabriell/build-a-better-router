<?php



const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';


//now that i am using a namespace class the logic has to change.


spl_autoload_register(function ($class) {

    //Core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    
    require base_path("{$class}.php");
   
});



$router = new \Core\Router();

//require the routes then parse it, route the current uri to where its needs to go.

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$router->route($uri);

