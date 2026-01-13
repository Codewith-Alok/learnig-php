/* Operators in PHP are symbols used to perform operations on values and variables [3]. They form the backbone of logic and calculations in PHP scripting, allowing developers to perform tasks such as arithmetic, comparison, logic evaluation, and assignments [1][2]. Below are some common types of operators in PHP:  */

<?php
// Arithmetic Operators
$a = 10;        
$b = 5;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Exponentiation: " . ($a ** $b) . "<br>";

// Assignment Operators
$c = 10;
$c += 5; // equivalent to $c = $c + 5
echo "Assignment Operator (+=): $c<br>";

// Comparison Operators
$d = 10;
$e = 20;
echo "Equal to: ";
var_dump($d == $e);
echo "<br>";

// Logical Operators
$f = true;
$g = false;
echo "Logical AND (&&): ";
var_dump($f && $g);
echo "<br>";

// Increment/Decrement Operators
$h = 10;
$h++;
echo "Increment Operator (++): $h<br>";
$h--;
echo "Decrement Operator (--): $h<br>";

// String Operators
$i = 'Hello';
$j = 'World';
$k = $i . ' ' . $j;
echo "String Concatenation: $k<br>";

// Array Operators
$l = array("apple", "banana");
$m = array("cherry", "date");
$n = $l + $m; // Union of arrays
print_r($n);



// Define the ten arrays
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['c' => 3, 'd' => 4];
$array3 = ['e' => 5, 'f' => 6];
// ... define the remaining 7 arrays ...
$array10 = ['s' => 19, 't' => 20];

// Union all ten arrays
// This approach is not as clean with ten variables in one line as array_merge
$unioned_array = $array1 + $array2 + $array3 /* + ... + */ + $array10; 

// Display the result
print_r($unioned_array);
?>


