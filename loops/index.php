<?php
// Start output buffering
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>PHP Loop Act - Secolles</title>
</head>
<body>

<h1>PHP Loop Act - Secolles</h1>

<?php
// Activity 1: Number Counter
echo "<div class='activity'><h2>Activity 1: Number Counter</h2>";
$i = 2;
while ($i <= 20) {
    echo $i . " ";
    $i += 2;
}
echo "</div>"; // Close activity div

// Activity 2: Password Validator
echo "<div class='activity'><h2>Activity 2: Password Validator</h2>";
$password = "wrong"; // Initialize with a wrong password
do {
    $password = "password123"; // Simulate user input
    if ($password !== "password123") {
        echo "Incorrect password.<br>";
    }
} while ($password !== "password123");
echo "Access Granted.</div>";

// Activity 3: Multiplication Table
echo "<div class='activity'><h2>Activity 3: Multiplication Table</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}
echo "</div>";

// Activity 4: Loop Control with break and continue
echo "<div class='activity'><h2>Activity 4: Loop Control with break and continue</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue;
    if ($i == 8) break;
    echo $i . " ";
}
echo "</div>";

// Activity 5: Sum of Numbers
echo "<div class='activity'><h2>Activity 5: Sum of Numbers</h2>";
$sum = 0;
$i = 1;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "The sum of numbers from 1 to 100 is: $sum</div>";

// Activity 6: Array Iteration with foreach
echo "<div class='activity'><h2>Activity 6: Array Iteration with foreach</h2>";
$movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];
foreach ($movies as $index => $movie) {
    echo ($index + 1) . ". $movie<br>";
}
echo "</div>";

// Activity 7: Key-Value Pairs with foreach
echo "<div class='activity'><h2>Activity 7: Key-Value Pairs with foreach</h2>";
$student = [
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
];
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
echo "</div>";

// Activity 8: Factorial Calculator
echo "<div class='activity'><h2>Activity 8: Factorial Calculator</h2>";
$number = 5;
$factorial = 1;
for ($i = $number; $i > 0; $i--) {
    $factorial *= $i;
}
echo "Factorial of $number is: $factorial</div>";

// Activity 9: FizzBuzz Challenge
echo "<div class='activity'><h2>Activity 9: FizzBuzz Challenge</h2>";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
echo "</div>";

// Activity 10: Prime Number Checker
echo "<div class='activity'><h2>Activity 10: Prime Number Checker</h2>";
$number = 17; // You can change this number for testing
$isPrime = true;
for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    }
}
if ($isPrime && $number > 1) {
    echo "$number is a prime number.</div>";
} else {
    echo "$number is not a prime number.</div>";
}

// Activity 11: Fibonacci Sequence
echo "<div class='activity'><h2>Activity 11: Fibonacci Sequence</h2>";
$fib1 = 0;
$fib2 = 1;
$count = 0;
echo "$fib1 $fib2 ";
while ($count < 8) {
    $next = $fib1 + $fib2;
    echo "$next ";
    $fib1 = $fib2;
    $fib2 = $next;
    $count++;
}
echo "</div>";

// Activity 12: Reverse a String
echo "<div class='activity'><h2>Activity 12: Reverse a String</h2>";
$input = "Hello"; // You can change this input
$reversed = "";
for ($i = strlen($input) - 1; $i >= 0; $i--) {
    $reversed .= $input[$i];
}
echo "Input: \"$input\"<br>Output: \"$reversed\"</div>";
?>

</body>
</html>

<?php
// End output buffering and flush the output
ob_end_flush();
?>
