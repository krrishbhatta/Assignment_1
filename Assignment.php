<!-- Question no 1 -->
<?php
// hello.php
echo "Hello, World! I am learning PHP.";
?>
<!-- Question no 2 -->

<?php


// Store values in variables
$name = "Krish Bhatta";
$age = 20;
$program = "BCSIT";

// Display output
echo "My name is $name, I am $age years old, and I study $program.";
?>

<!-- Question no 3 -->

<?php


// Define a constant
define("SITE_NAME", "Pokhara University");

// Print the constant
echo SITE_NAME;
?>
<!-- Question no 4 -->
 <?php
// operators.php

echo "<h2>Part (a): Arithmetic Operators</h2>";

// Take two numbers
$num1 = 20;
$num2 = 8;

// Perform operations
echo "First Number: $num1 <br>";
echo "Second Number: $num2 <br><br>";

echo "Sum: " . ($num1 + $num2) . "<br>";
echo "Difference: " . ($num1 - $num2) . "<br>";
echo "Product: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";
echo "Modulus: " . ($num1 % $num2) . "<br>";


echo "<h2>Part (b): Assignment Operators</h2>";

$x = 10;
echo "Initial value of x = $x <br>";

$x += 5; // same as $x = $x + 5
echo "After x += 5 : $x <br>";

$x -= 3; // same as $x = $x - 3
echo "After x -= 3 : $x <br>";

$x *= 4; // same as $x = $x * 4
echo "After x *= 4 : $x <br>";

$x /= 2; // same as $x = $x / 2
echo "After x /= 2 : $x <br>";

$x %= 3; // same as $x = $x % 3
echo "After x %= 3 : $x <br>";


echo "<h2>Part (c): Logical Operators</h2>";

$number = 44;
echo "Number = $number <br>";

// Check if number is between 1 and 100 and even
if (($number >= 1 && $number <= 100) && ($number % 2 == 0)) {
    echo " $number is between 1 and 100 AND it is even.<br>";
}

// Using || (OR)
if ($number < 1 || $number > 100) {
    echo " $number is outside the range 1–100.<br>";
} else {
    echo " $number is within the range 1–100.<br>";
}

// Using ! (NOT)
if (!($number % 2)) {
    echo " $number is even (checked using NOT operator).<br>";
} else {
    echo " $number is odd.<br>";
}
?>
