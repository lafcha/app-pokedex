<?php

require __DIR__ . '/../vendor/autoload.php';

use Pokedex\Controllers\MainController;

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET', 
    '/', 
    [
      'controller' => 'MainController',
      'action' => 'home'
    ],
    'home' 
  );

  $router->map(
    'GET', 
    '/types/', 
    [
      'controller' => 'PokemonController',
      'action' => 'types'
    ],
    'types' 
  );

  $router->map(
    'GET', 
    '/detail/[i:id]', 
    [
      'controller' => 'PokemonController',
      'action' => 'detail'
    ],
    'detail' 
  );

  $router->map(
    'GET', 
    '/type/[i:id]', 
    [
      'controller' => 'PokemonController',
      'action' => 'type'
    ],
    'type' 
  );

  //dd($router);
  $match = $router->match();
  //dd($match);
  if($match){

    $routeData = $match['target'];

    $constrollerToUse = '\Pokedex\Controllers\\' . $routeData['controller'];

    $methodToUse = $routeData['action']; 

    $controller = new $constrollerToUse();
    $controller->$methodToUse($match['params']);

  } else {
    $controller = new MainController();
    $controller->pageNotFoundAction();
  }