<?php 

class Product
{
    protected $code;
    protected $name;
    protected $description;
    protected $price;
    protected $animal_classes;

    public function __construct($name, $description, $price, $animal_classes)
    {
        $this->setCode();
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setAnimalClasses($animal_classes);
    }
    

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode()
    {
        $this->code = uniqid();

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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of animal_classes
     */ 
    public function getAnimalClasses()
    {
        return $this->animal_classes;
    }

    /**
     * Set the value of animal_classes
     *
     * @return  self
     */ 
    public function setAnimalClasses($animal_classes)
    {
        $this->animal_classes = $animal_classes;

        return $this;
    }
}
?>