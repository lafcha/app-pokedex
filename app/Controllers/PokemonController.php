<?php

namespace Pokedex\Controllers;

use Pokedex\Models\CoreModel;
use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;
use Pokedex\Models\PokemonType;

class PokemonController extends CoreController {

    function types(){

        $typesModel = new Type;

        $pokemonsTypes = $typesModel->AllTypesByNameOrder();
        $viewData = [
          'pokemonsTypes' => $pokemonsTypes,
        ];
        $this->show('types', $viewData);
      }

      function detail($params){

        $detailModel = new Pokemon;

        $onePokemon = $detailModel->find($params['id']);

        $pokemonTypeModel = new PokemonType;

        $typesForOnePokemon = $pokemonTypeModel->findPokemonTypes($params['id']);
        
        $stats = 100/250;
        $viewData = [
            'onePokemon' => $onePokemon,
            'typesForOnePokemon' => $typesForOnePokemon,
            'stats' => $stats,
        ];

        $this->show('detail', $viewData);
      }

      function type ($params){

        $pokemonTypeModel = new PokemonType;

        $pokmemonsByType = $pokemonTypeModel->findPokemonsByType($params['id']);
        
        $viewData = [
            'pokemonsByType' => $pokmemonsByType,
        ];

        $this->show('type', $viewData);
      }
    
}