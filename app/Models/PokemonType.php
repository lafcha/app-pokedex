<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;

class PokemonType extends CoreModel {
    private $pokemon_numero;
    private $type_id;
    private $name;
    private $color;
    private $pokemon_id;
    private $nom;

    public function findPokemonTypes($id){
        $sql = '
        SELECT pokemon.id, pokemon.numero, pokemon_type.id, pokemon_type.pokemon_numero, pokemon_type.type_id, type.id, type.name, type.color
        FROM pokemon_type
        INNER JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
        INNER JOIN type ON pokemon_type.type_id = type.id
        WHERE pokemon.id = ' .$id;

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);
    
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    
        return $results;
    }

    public function findPokemonsByType ($id){
        $sql = '
        SELECT pokemon.id as pokemon_id, pokemon.numero, pokemon_type.id, pokemon_type.pokemon_numero, pokemon.nom, pokemon_type.type_id, type.id, type.name, type.color
        FROM pokemon_type
        INNER JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
        INNER JOIN type ON pokemon_type.type_id = type.id
        WHERE type.id = ' .$id;

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);
    
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    
        return $results;
    }

    /**
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of pokemon_id
     */ 
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Set the value of pokemon_id
     *
     * @return  self
     */ 
    public function setPokemonId($pokemon_id)
    {
        $this->pokemon_id = $pokemon_id;

        return $this;
    }


    /**
     * Get the value of pokemon_numero
     */ 
    public function getPokemonNumero()
    {
        return $this->pokemon_numero;
    }

    /**
     * Set the value of pokemon_numero
     *
     * @return  self
     */ 
    public function setPokemonNumero($pokemon_numero)
    {
        $this->pokemon_numero = $pokemon_numero;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}
