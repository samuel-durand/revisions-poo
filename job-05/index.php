<?php

require('product.php');


$product = new Product(1, 'Nom du produit', ['photo1.jpg'], 100, 'Description du produit', 10, '2024-01-01', '2024-01-02', 1);


$categoryData = $product->getCategory();


var_dump($categoryData);