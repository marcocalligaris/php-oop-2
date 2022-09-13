<?php
require_once __DIR__ . '/Product.php';

class NoFoodProduct extends Product;
{
    private $materials;
    private $color;

    public function __construct($name, $description, $price, $animal_classes, $materials, $color);
    {
        parent::__construct($name, $description, $price, $animal_classes);
        $this->setMaterials($materials);
        $this->setColor($color);
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials)
    {
        $this->materials = $materials;

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


?>