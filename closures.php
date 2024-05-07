<?php
echo "<h1 style='color: red'>Steven Halla, CIS 243</h1>";

$printer = function($key, $value) {
    echo "$key => $value <br/>";
};

$products = [
    'Tires' => 100,
    'Oil' => 10,
    'Spark Plugs' => 4,
    'headlights' => 80,
    'wiper_blades' => 20,
    'brakes' => 120,
    'steering_wheel' => 90
];

$markup = 0.20;
$tax = 0.10;

$markupPrices = $products; // Copy original prices
array_walk($markupPrices, function(&$val) use ($markup) {
    $val = $val * (1 + $markup);
});

$taxPrices = $markupPrices; // Start with markup prices
array_walk($taxPrices, function(&$val) use ($tax) {
    $val = $val * (1 + $tax);
});

echo "<h2>Original Price</h2>";
array_walk($products, $printer);

echo "<h2>Markup Price</h2>";
array_walk($markupPrices, $printer);

echo "<h2>Markup Price after Tax</h2>";
array_walk($taxPrices, $printer);
?>
