<?php


require('./index.php');


$products = [
    [
        'id' => 4,
        'name' => 'Product 1',
        'photos' => ['photo1.jpg', 'photo2.jpg'],
        'price' => 10.99,
        'description' => 'Product 1 description',
        'quantity' => 100,
        'createdAt' => '2022-01-01',
        'updatedAt' => '2022-01-01',
    ],
    [
        'id' => 5,
        'name' => 'Product 2',
        'photos' => ['photo3.jpg', 'photo4.jpg'],
        'price' => 19.99,
        'description' => 'Product 2 description',
        'quantity' => 50,
        'createdAt' => '2022-01-02',
        'updatedAt' => '2022-01-02',
    ],

    [
        'id' => 6,
        'name' => 'Product 2',
        'photos' => ['photo3.jpg', 'photo4.jpg'],
        'price' => 19.99,
        'description' => 'Product 2 description',
        'quantity' => 50,
        'createdAt' => '2022-01-02',
        'updatedAt' => '2022-01-02',
    ],

    [
        'id' => 7,
        'name' => 'Product 2',
        'photos' => ['photo3.jpg', 'photo4.jpg'],
        'price' => 19.99,
        'description' => 'Product 2 description',
        'quantity' => 50,
        'createdAt' => '2022-01-02',
        'updatedAt' => '2022-01-02',
    ],

    [
        'id' => 8,
        'name' => 'Product 2',
        'photos' => ['photo3.jpg', 'photo4.jpg'],
        'price' => 19.99,
        'description' => 'Product 2 description',
        'quantity' => 50,
        'createdAt' => '2022-01-02',
        'updatedAt' => '2022-01-02',
    ],
];

foreach ($products as $productData) {
    $product = new Product(
        $productData['id'],
        $productData['name'],
        $productData['photos'],
        $productData['price'],
        $productData['description'],
        $productData['quantity'],
        $productData['createdAt'],
        $productData['updatedAt']
    );

    $product->insert();
}

