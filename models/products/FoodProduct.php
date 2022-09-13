<?php
require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{
    private $ingredients;
    private $expiration;

    public function __construct($name, $description, $price, $animal_classes, $ingredients, $expiration)
    {
        parent::__construct($name, $description, $price, $animal_classes);
        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }
}


?>