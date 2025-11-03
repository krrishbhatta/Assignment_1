<?php
// 1. Check if user’s age ≥ 18
$age = 20;
if ($age >= 18) {
    echo "1. You are eligible to vote.";
} else {
    echo "1. You are not eligible to vote.";
}
echo "<br><br><hr><br>";


// 2. Check whether a number is positive or negative
$num = -5;
if ($num > 0) {
    echo "2. The number is positive.";
} elseif ($num < 0) {
    echo "2. The number is negative.";
} else {
    echo "2. The number is zero.";
}
echo "<br><br><hr><br>";


// 3. Grade based on marks
$marks = 82;
if ($marks >= 90 && $marks <= 100) {
    echo "3. Grade: A";
} elseif ($marks >= 75) {
    echo "3. Grade: B";
} elseif ($marks >= 60) {
    echo "3. Grade: C";
} elseif ($marks >= 40) {
    echo "3. Grade: D";
} else {
    echo "3. Fail";
}
echo "<br><br><hr><br>";


// 4. Print month name from number
$month = 4;
switch ($month) {
    case 1: $m = "January"; break;
    case 2: $m = "February"; break;
    case 3: $m = "March"; break;
    case 4: $m = "April"; break;
    case 5: $m = "May"; break;
    case 6: $m = "June"; break;
    case 7: $m = "July"; break;
    case 8: $m = "August"; break;
    case 9: $m = "September"; break;
    case 10: $m = "October"; break;
    case 11: $m = "November"; break;
    case 12: $m = "December"; break;
    default: $m = "Invalid month number.";
}
echo "4. Month: $m";
echo "<br><br><hr><br>";


// 5. Even or Odd using ternary operator
$num = 9;
echo "5. " . (($num % 2 == 0) ? "Even" : "Odd");
echo "<br><br><hr><br>";


// 6. Sum of first 10 natural numbers using while loop
$sum = 0;
$i = 1;
while ($i <= 10) {
    $sum += $i;
    $i++;
}
echo "6. Sum = $sum";
echo "<br><br><hr><br>";


// 7. Even numbers between 1 and 20 using do...while
$i = 1;
echo "7. Even numbers between 1–20: ";
do {
    if ($i % 2 == 0) {
        echo "$i ";
    }
    $i++;
} while ($i <= 20);
echo "<br><br><hr><br>";


// 8. Factorial using do...while
$num = 5;
$fact = 1;
$i = 1;
do {
    $fact *= $i;
    $i++;
} while ($i <= $num);
echo "8. Factorial of $num = $fact";
echo "<br><br><hr><br>";


// 9. Reverse order 10 to 1 using for loop
echo "9. Reverse 10–1: ";
for ($i = 10; $i >= 1; $i--) {
    echo "$i ";
}
echo "<br><br><hr><br>";


// 10. Print numbers 1–20 but skip even numbers
echo "10. Numbers 1–20 (odd only): ";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) continue;
    echo "$i ";
}
echo "<br><br><hr><br>";


// 11. Prime numbers between 1 and 50
echo "11. Prime numbers 1–50: ";
for ($num = 2; $num <= 50; $num++) {
    $prime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $prime = false;
            break;
        }
    }
    if ($prime) echo "$num ";
}
echo "<br><br><hr><br>";


// 12. Display 5 student names using foreach
echo "12. Student Names:<br>";
$students = ["Aayush", "Bikash", "Chirag", "Dipesh", "Elina"];
foreach ($students as $name) {
    echo "$name<br>";
}
echo "<br><hr><br>";


// 13. Read 10 numbers and stop if negative
echo "13. Stop at first negative number:<br>";
$numbers = [3, 5, 8, -2, 7, 9];
foreach ($numbers as $n) {
    if ($n < 0) break;
    echo "$n ";
}
echo "<br><br><hr><br>";


// 14. Display 1–20 but skip even numbers using continue
echo "14. Numbers 1–20 (skip even): ";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) continue;
    echo "$i ";
}
echo "<br><br><hr><br>";
?>
