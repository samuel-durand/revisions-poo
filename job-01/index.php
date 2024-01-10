<?php

class Product {
    private int $id;
    private string $name;
    private array $photos;
    private int $price;
    private string $description;
    private int $quantity;
    private DateTime $createdAt;
    private DateTime $updatedAt;

    // Constructor
    public function __construct($id, $name, $photos, $price, $description, $quantity, $createdAt, $updatedAt) {
        $this->id = $id;
        $this->name = $name;
        $this->photos = $photos;
        $this->price = $price;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    // ID Getter and Setter
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    // Name Getter and Setter
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    // Photos Getter and Setter
    public function getPhotos() {
        return $this->photos;
    }
    public function setPhotos($photos) {
        $this->photos = $photos;
    }

    // Price Getter and Setter
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
    }

    // Description Getter and Setter
    public function getDescription() {
        return $this->description;
    }
    public function setDescription($description) {
        $this->description = $description;
    }

    // Quantity Getter and Setter
    public function getQuantity() {
        return $this->quantity;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    // CreatedAt Getter and Setter
    public function getCreatedAt() {
        return $this->createdAt;
    }
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    // UpdatedAt Getter and Setter
    public function getUpdatedAt() {
        return $this->updatedAt;
    }
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function insert() {
        $dsn = "mysql:host=localhost;dbname=draft-shop";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);

        $sql = "INSERT INTO `category`(`id`, `name`, `photos`, `createdAt`, `updatedAt`, `category_id`, `createdAt`, `updatedAt`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->id, $this->name, $this->photos, $this->price, $this->description, $this->quantity, $this->createdAt, $this->updatedAt]);
    }
}

// $photos = ['photo1.jpg', 'photo2.jpg'];
// $createdAt = new DateTime('now');
// $updatedAt = new DateTime('now');

// $product1 = new Product(1, "Example Product", $photos, 100, "This is a description", 10, $createdAt, $updatedAt);

// $product2 = new Product();
// $product2->setId(2);
// $product2->setName("Another Product");
// $product2->setPhotos($photos);
// $product2->setPrice(200);
// $product2->setDescription("Another description");
// $product2->setQuantity(5);
// $product2->setCreatedAt($createdAt);
// $product2->setUpdatedAt($updatedAt);

var_dump($product);


