<?php 
include_once __DIR__ . '/models/products/FoodProduct.php';
include_once __DIR__ . '/models/customers/Customer.php';
include_once __DIR__ . '/models/shopping/Cart.php';
include_once __DIR__ . '/models/shipping/Address.php';
include_once __DIR__ . '/models/shopping/CreditCard.php';


$item = new FoodProduct('Cibo umido in scatola', 'Per cani', 1.80, ['cani'], ['carne di manzo', 'verdura'], '20-12-2022');

$client = new Customer();

$client->addToCart($item);

$indirizzo = new Address('Marco', 'Calligaris', 'Via Bariglaria 434', '33100', 'Udine', 'Italy');

$carta = new CreditCard('Marco Calligaris', '4023604178156', 'Mastercard', '21-08-2026');

?>