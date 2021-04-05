<?php

namespace Pokedex\Controllers;

class CoreController{

    /**
     * Méthode permettant d'afficher un rendu HTML 
     * @param [type] $viewName
     * @param array $viewData
     * @return void
     */
    protected function show($viewName, $viewData = [])
    {
    global $router;
        
    $viewData['curentPage'] = $viewName;

  
    extract($viewData);
 

    $baseUri = $_SERVER['BASE_URI'];

    require __DIR__ . '/../views/header.tpl.php';
    require __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require __DIR__ . '/../views/footer.tpl.php';
    }
      
}
