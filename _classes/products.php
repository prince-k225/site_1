<?php
class Products
{

    public  int $id;
    public string $name;
    public string $description;
    public int $price;
    public string $category;
    public int $stock;
    public bool $in_sold;

    public function __construct(int $id) {
        global $db;
        $productRequ = $db->prepare('SELECT * from client_test WHERE id=?');
        $productRequ->exec([$id]);
        $data = $productRequ->fetch(PDO::FETCH);
        $this->id = $id;
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->price = $data['price'];
        $this->category = $data['category'];
        $this->stock = $data['stock'];
        $this->in_stock = $data['in_stock'];
    }

    static function getAllProducts() {

        global $db;
        $allProductrerqu = $db->prepare('SELECT * FROM products');
        $allProductrerqu->execute([]);
        return  $allProductrerqu->fetchAll(PDO::FETCH_ASSOC);

    }

}