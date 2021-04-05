<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;

class Type extends CoreModel {

    private $name;
    private $color;

    public function AllTypesByNameOrder(){
        $sql = '
        SELECT *
        FROM type
        ORDER BY name
        ';
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);
    
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    
        return $results;
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
}