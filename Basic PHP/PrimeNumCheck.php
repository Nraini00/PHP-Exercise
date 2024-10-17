<?php

// Prime Number Check
// Write a PHP function that checks if a given number is prime

// 1. using simple method
// A simple solution is to iterate through all numbers from 2 to n/2 and for every number check if it divides n. 
// If we find any number that divides, we return 0 (false) otherwise we will return 1 (true). 

function primeCheckSimple($num) 
{
    if ($num == 1)
    return 0;

    for ($a = 2; $a <= $num/2; $a++) {
        if ($num % $a == 0)
            return 0;
    }
    return 1;

}

$num = 53;
$result = primeCheckSimple($num);

echo "Simple Method";
if ($result == 1)
    echo "\nIt is a Prime Number";
else 
    echo "\nIt is Not Prime Number";


// 2. Efficient Method
// instead of checking till n, we can check till sqrt(n) because a larger factor of n must be a multiple of smaller factor that has been already checked.
// So, we will traverse in the range [2,sqrt(number)] to check if the number is divisible by any number or not. If it is divisible the its not a prime number.

function primeCheckEfficient($num1)
{
    if ($num1 == 1)
    return 0;

    for ($b = 2; $b <=sqrt($num1); $b++) {
        if ($num1 % $b == 0)
        return 0;
    }
    return 1;
}

echo "\n";

$num1 = 54;
$result1 = primeCheckEfficient($num1);

echo "\nEfficient Method";
if ($result1 == 1)
    echo "\nIt is a Prime Number";
else
    echo "\nIt is Not Prime Number";

//Reference: https://www.geeksforgeeks.org/php-check-number-prime/