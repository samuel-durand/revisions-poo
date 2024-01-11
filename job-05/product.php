<?php


class Product {
    private $id;
    private $name;
    private $photos;
    private $price;
    private $description;
    private $quantity;
    private $id_category;
    private $createdAt;
    private $updatedAt;
    private $pdo;

    public function __construct($id, $name , $photos , $price , $description , $quantity , $createdAt , $updatedAt,  $id_category) {
        $this->id = $id;
        $this->name = $name;
        $this->photos = $photos;
        $this->price = $price;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->id_category = $id_category;

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

        // id_category Getter and Setter
    public function getIdCategory() {
        return $this->id_category;
    }

    public function setIdCategory($id_category) {
        $this->id_category = $id_category;
    }
    
    public function insert() {
        $dsn = "mysql:host=localhost;dbname=draft-shop";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);

        $sql = "INSERT INTO `product`(`id`, `name`, `photos`, `price`, `description`, `quantity`, `createdAt`, `updatedAt`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->id, $this->name, $this->photos, $this->price, $this->description, $this->quantity, $this->createdAt, $this->updatedAt]);
    }

    public function select($productId) {
        $dsn = "mysql:host=localhost;dbname=draft-shop";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);
    
        $sql = "SELECT * FROM `product` WHERE `id`=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$productId]);
    
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

    public function getCategory() {
        $dsn = "mysql:host=localhost;dbname=draft-shop";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);

        $sql = "SELECT * FROM `category`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

}




// $product = new Product(0, '', [], 0, '', 0, '', '');
// $productData = $product->getCategory(7);

// $hydratedProduct = new Product(0, '', [], 0, '', 0, '', '');

// $hydratedProduct->setId($productData['id']);
// $hydratedProduct->setName($productData['name']);
// $hydratedProduct->setPhotos($productData['photos']); 
// $hydratedProduct->setPrice($productData['price']);
// $hydratedProduct->setDescription($productData['description']);
// $hydratedProduct->setQuantity($productData['quantity']);
// $hydratedProduct->setCreatedAt($productData['createdAt']);
// $hydratedProduct->setUpdatedAt($productData['updatedAt']);

// var_dump($hydratedProduct);
    

// $product = new Product($id, $name, $photos, $price, $description, $quantity, $createdAt, $updatedAt);




