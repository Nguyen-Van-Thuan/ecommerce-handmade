<?php
// connect to database
$db = new mysqli('localhost', 'root', '', 'ecommerce-handmade');

class ProductModel {
    // get list of all products from database
    public static function getAll() {
        global $db;

        $result = $db->query('SELECT * FROM products');

        $products = array();
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }
}
?>
