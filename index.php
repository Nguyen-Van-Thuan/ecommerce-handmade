<?php
// load controller
require_once 'controllers/product_controller.php';

// create controller object and call action
$controller = new ProductController();
$controller->index();
?>
