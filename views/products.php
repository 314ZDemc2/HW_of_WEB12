<?php

$mssProduct = [
    ["name" => "Product 1", "price" => 18, ],
    ["name" => "Product 2", "price" => 5, ],
    ["name" => "Product 3", "price" => 57, ],
];

$course = CourseStatic::getCourse();

foreach ($mssProduct as $product){?>
    <div class="product">
        <div class="product-name"><?= $product['name']?></div>
        <div class="product-price"><?= $product['price'] . " UAH"?></div>
    </div>

<?php }