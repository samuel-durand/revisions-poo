<?php

class Category {
    private int $id;
    private string $name;
    private string $description;
    private DateTime $createdAt;
    private DateTime $updatedAt;
    private int $category_id; 

    // Constructor
    public function __construct($id, $name, $description, $createdAt, $updatedAt, $category_id = null) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->category_id = $category_id;
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
}

$createdAt = new DateTime('now');
$updatedAt = new DateTime('now');
$category = new Category(1, "Electronics", "Devices and gadgets", $createdAt, $updatedAt, 1);

var_dump($category);
