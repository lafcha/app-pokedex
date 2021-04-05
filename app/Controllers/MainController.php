<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends CoreController {
    function home(){

      $pokemonModel = new Pokemon;
      $pokemonsInHome = $pokemonModel->AllPokemonsForHome();
      $viewData = [
        'pokemonsInHome' => $pokemonsInHome,
      ];
      $this->show('home', $viewData);
    }

    
    function pageNotFoundAction()
  {
    http_response_code(404);
    $this->show('page404');
  }
}