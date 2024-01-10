<?php

class Category {
    private int $id;
    private string $name;
    private string $description;
    private DateTime $createdAt;
    private DateTime $updatedAt;
    private int $category_id; 

    // Constructor
    public function __construct($id, $name, $description, $createdAt, $updatedAt, $category_id ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->category_id = $category_id;
    }

    //  Getter and Setter
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

    // Description Getter and Setter
    public function getDescription() {
        return $this->description;
    }
    public function setDescription($description) {
        $this->description = $description;
    }

    // CreatedAt Getter and Setter
    public function getCreatedAt() {
        return $this->createdAt;
    }
    public function setCreatedAt(DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    // UpdatedAt Getter and Setter
    public function getUpdatedAt() {
        return $this->updatedAt;
    }
    public function setUpdatedAt(DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    // Category_id Getter and Setter
    public function getCategoryId() {
        return $this->category_id;
    }
    public function setCategoryId(?int $category_id) {
        $this->category_id = $category_id;
    }

    public function insert() {
        $dsn = "mysql:host=localhost;dbname=draft-shop";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);

        $sql = "INSERT INTO `category`(`id`, `name`,  `description`, `category_id`, `createdAt`, `updatedAt`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->id, $this->name,  $this->description, this->category_id,  $this->createdAt, $this->updatedAt, ]);
    }

}

$id = 11;
$name = "Product Name";
$description = "Product description";

$createdAt = "2022-01-01";
$updatedAt = "2022-01-01";

$category = new Category($id, $name, $category_id,  $description, $createdAt, $updatedAt);

// Call the insert() method
$category->insert();
var_dump($category);
