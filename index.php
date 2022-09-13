<?php 
include_once __DIR__ . '/models/products/FoodProduct.php';
include_once __DIR__ . '/models/customers/Customer.php';

$item = new FoodProduct('Cibo umido in scatola', 'Per cani', 1.80, ['cani'], ['carne di manzo', 'verdura'], '20-12-2022');

$client = new Customer();
var_dump($client);
?>