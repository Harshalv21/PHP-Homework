<?php

echo "<h2>Index-based Array using for loop</h2>";
$cars=array("PoloGT","GTr","M5","AMG");

for($i=0;$i < count($cars); $i++){
  echo " Elements at index $i: ". $cars[$i] . "<br>";
}

echo "<h2>Associative Array using foreach loop</h2>";

$carPrices = array(
    "BMW" => 5000000,
    "Audi" => 4500000,
    "Mercedes" => 5500000,
    "Toyota" => 2000000,
    "Honda" => 1500000
);

// b. foreach loop
foreach ($carPrices as $car => $price) {
    echo "$car costs ₹$price <br>";
}

echo "<h2>Array Functions Demonstration</h2>";

// c. Array functions

// array_push()
array_push($cars, "Kia", "Hyundai");
echo "After array_push(): <br>";
print_r($cars);
echo "<br>";

// array_pop()
array_pop($cars);
echo "After array_pop(): <br>";
print_r($cars);
echo "<br>";

// array_merge()
$newCars = array("Skoda", "Volkswagen");
$mergedCars = array_merge($cars, $newCars);
echo "After array_merge(): <br>";
print_r($mergedCars);
echo "<br>";

// array_slice()
$slicedCars = array_slice($mergedCars, 2, 3);
echo "After array_slice(): <br>";
print_r($slicedCars);
echo "<br>";

// array_keys()
$keys = array_keys($carPrices);
echo "Car names (keys): <br>";
print_r($keys);





?>