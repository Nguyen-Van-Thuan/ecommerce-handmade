<?php
// load model
require_once 'models/product_model.php';

class ProductController {
    // action to display list of products
    public function index() {
        // get list of products from database
        $products = ProductModel::getAll();

        // load view
        require_once 'views/product_list.php';
    }
}
?>
