<?php

// Factorial Calculation
// Write a recursive function to calculate the factorial of a number.

// break factorial(n) into smaller problem and then define reacurrance.
// PHP to find factorial of a number
function factorial($a) 
{
    if ($a == 0)
        return 1;
    return $a * factorial($a - 1);
}

$num = 10;
echo "Recursive Method";
echo "\nThe Factorial of ", $num, " is ", factorial($num);

// beside recursive we can also use a iterative solution.

// Iterative Method

function factorial_iterative($b) 
{
    $num = 1;
    for ($c = 1; $c<= $b; $c++){
        $num *= $c;
    }
    return $num;
}

$result = 8;
echo "\n";
echo "\nIterative Method";
echo "\nFactorial of $result is ". factorial_iterative($result). "\n";



// Reference: https://www.geeksforgeeks.org/program-for-factorial-of-a-number/