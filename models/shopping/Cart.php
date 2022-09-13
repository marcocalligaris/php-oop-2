<?php 
class Cart
{
    private $items = [];
    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        $total = 0;
        foreach($this->items as $item){
            $total += $item->getPrice();
        }
        return $total;
    }

    public function addItem($item)
    {
        if((!$item instanceof Product)) throw new Exception("$item must be instance of Product");
        $this->items[] = $item;
    }
}

?>