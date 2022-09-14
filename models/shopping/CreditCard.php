<?php
class CreditCard
{
    private $fullname;
    private $number;
    private $circuit;
    private $expiration;

    public function __construct($fullname, $number, $circuit, $expiration){
        $this->setFullname($fullname);
        $this->setNumber($number);
        $this->setCircuit($circuit);
        $this->setExpiration($expiration);
    }

        /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return date("d-m-Y", $this->expiration);
    }

    public function isExpired() {
        $today = strtotime(date("d-m-Y"));
        return $this->expiration < $today;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = strtotime($expiration);

        return $this;
    }

    /**
     * Get the value of fullname
     */ 
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set the value of fullname
     *
     * @return  self
     */ 
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of circuit
     */ 
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set the value of circuit
     *
     * @return  self
     */ 
    public function setCircuit($circuit)
    {
        $this->circuit = $circuit;

        return $this;
    }


}
?>