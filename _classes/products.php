<?php
class Products
{
    public int $id;
    public string $name;
    public string $description;
    public int $price;
    public string $category;
    public int $stock;
    public bool $in_stock;
    public string $image_url;
    public string $sizes;  // Stocké sous forme "S,M,L" en BDD
    public string $colors; // Stocké sous forme "#00F0FF,#FF5A5F" en BDD

    public function __construct(int $id) {
        global $db; // Utilisation de votre variable globale de connexion PDO
        
        // Correction : Table harmonisée sur 'products' au lieu de 'client_test'
        $productRequ = $db->prepare('SELECT * FROM products WHERE id = ?');
        
        // Correction : C'est execute() qu'il faut utiliser pour une requête préparée, pas exec()
        $productRequ->execute([$id]);
        
        // Correction : Utilisation de PDO::FETCH_ASSOC pour récupérer un tableau associatif complet
        $data = $productRequ->fetch(PDO::FETCH_ASSOC);
        
        // On vérifie si le produit existe bien en BDD avant d'assigner
        if ($data) {
            $this->id = $id;
            $this->name = $data['name'];
            $this->description = $data['description'];
            $this->price = $data['price'];
            
            // Correction : Ajout des '$' manquants devant 'data'
            $this->category = $data['category'];
            $this->stock = $data['stock'];
            $this->in_stock = (bool)$data['in_stock']; // Harmonisé avec votre propriété
            $this->image_url = $data['image_url'] ?? '';
            $this->sizes = $data['sizes'] ?? '';
            $this->colors = $data['colors'] ?? '';
        }
    }

    public static function getAllProducts() {
        global $db;
        // Correction : Nettoyage du nom de la variable de requête
        $allProductRequ = $db->prepare('SELECT * FROM products');
        $allProductRequ->execute();
        return $allProductRequ->fetchAll(PDO::FETCH_ASSOC);
    }
}