<?php
// Activity 1: Number Counter
echo "Activity 1: Number Counter\n";

// Part 1: Print numbers from 1 to 10 using a while loop
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}

echo "\n\n";

// Part 2: Print even numbers between 1 and 20
$j = 2;
while ($j <= 20) {
    echo $j . " ";
    $j += 2;
}

echo "\n\n";

// Activity 2: Password Validator
echo "Activity 2: Password Validator\n";

do {
    $input = readline("Please enter the password: ");
    if ($input !== "password123") {
        echo "Incorrect password.\n";
    }
} while ($input !== "password123");

echo "Access Granted.\n\n";

// Activity 3: Multiplication Table
echo "Activity 3: Multiplication Table\n";

for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "\n";
}

echo "\n";

// Activity 4: Loop Control with break and continue
echo "Activity 4: Loop Control with break and continue\n";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    if ($i == 8) {
        break;
    }
    echo $i . " ";
}

echo "\n\n";

// Activity 5: Sum of Numbers
echo "Activity 5: Sum of Numbers\n";

$sum = 0;
$i = 1;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "The sum of numbers from 1 to 100 is: $sum\n\n";

// Activity 6: Array Iteration with foreach
echo "Activity 6: Array Iteration with foreach\n";

$movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];

foreach ($movies as $index => $movie) {
    echo ($index + 1) . ". " . $movie . "\n";
}

echo "\n";

// Activity 7: Key-Value Pairs with foreach
echo "Activity 7: Key-Value Pairs with foreach\n";

$student = [
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
];

foreach ($student as $key => $value) {
    echo "$key: $value\n";
}

echo "\n";

// Activity 8: Factorial Calculator
echo "Activity 8: Factorial Calculator\n";

$number = 5;
$factorial = 1;

for ($i = $number; $i > 0; $i--) {
    $factorial *= $i;
}

echo "Factorial of $number is: $factorial\n\n";

// Activity 9: FizzBuzz Challenge
echo "Activity 9: FizzBuzz Challenge\n";

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

echo "\n\n";

// Activity 10: Prime Number Checker
echo "Activity 10: Prime Number Checker\n";

$number = readline("Enter a number: ");
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}

echo "\n";

// Activity 11: Fibonacci Sequence
echo "Activity 11: Fibonacci Sequence\n";

$a = 0;
$b = 1;
$count = 0;

while ($count < 10) {
    echo $a . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;
    $count++;
}

echo "\n\n";

// Activity 12: Reverse a String
echo "Activity 12: Reverse a String\n";

$string = "Hello";
$reversed = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}

echo "Input: \"$string\"\n";
echo "Output: \"$reversed\"\n";
?>
;