<?php 
include_once __DIR__ . '/models/products/FoodProduct.php';

$item = new FoodProduct('Cibo umido in scatola', 'Per cani', 1.80, ['cani'], ['carne di manzo', 'verdura'], '20-12-2022');

var_dump($item);

?>