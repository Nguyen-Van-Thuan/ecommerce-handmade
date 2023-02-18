<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <p><?php echo $product['price']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
