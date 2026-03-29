<?php

echo "<h2>String Creation (Single & Double Quotes)</h2>";

// a. Single and Double quotes
$car1 = 'BMW is a luxury car';
$car2 = "Audi is known for performance";

echo "Single Quote: $car1 <br>";
echo "Double Quote: $car2 <br>";

echo "<h2>String Concatenation</h2>";

// b. Concatenation
$model = "Mercedes";
$price = 5500000;

$result = $model . " costs ₹" . $price;
echo "Concatenated String: " . $result . "<br>";

echo "<h2>String Searching (strpos)</h2>";

// c. strpos()
$description = "Toyota cars are reliable and fuel efficient";
$position = strpos($description, "reliable");

if ($position !== false) {
    echo "Substring found at position: $position <br>";
} else {
    echo "Substring not found <br>";
}

echo "<h2>String Replacement</h2>";

// d. str_replace()
$newDescription = str_replace("Toyota", "Honda", $description);
echo "After replacement: $newDescription <br>";

echo "<h2>String Functions</h2>";

// e. String functions
$str = "  Hyundai cars are Affordable  ";

// strlen()
echo "Length: " . strlen($str) . "<br>";

// strtolower()
echo "Lowercase: " . strtolower($str) . "<br>";

// strtoupper()
echo "Uppercase: " . strtoupper($str) . "<br>";

// trim()
echo "Trimmed: '" . trim($str) . "'<br>";

// substr()
echo "Substring (0,7): " . substr($str, 0, 7) . "<br>";

?>