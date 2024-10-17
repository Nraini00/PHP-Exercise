<?php

// Fibonacci sequence is a series of numbers where each number is the sum of the two numbers that come before it.
// Create a function that generates the first n numbers of the Fibonacci sequence.

// If N = 0 fibonacci number will be 0.
// Else if n = 1 Fibonacci number will be 1.
// Else return value for func(n-1) + func(n-2).

// method using recursion
function fibonacci_Num($num) 
{
    if($num == 0) {
        return 0;
    }
    elseif ($num == 1) {
        return 1;
    }
    else{
        return (fibonacci_Num($num - 2) + fibonacci_Num($num - 1));
    }
}

$num = 10;
echo "\nResults Recursion: ";
for ($a = 0; $a < $num; $a++) {
    echo fibonacci_Num($a);
    echo " ";
}


// using iterative method

function  fibonacci_Num_Iterative($num) 
{
    $a = 0;
    $b = 1;

    if ($num < 1)
    return;
    echo "\nIterative Num: ";
    echo ($a);
    echo " ";

    echo "\nResults Iterative: ";
    for ($c = 1;  $c < $num; $c++)
    {
        echo($b);
        echo " ";
        $total = $a + $b;
        $a = $b;
        $b = $total;
    }

}

fibonacci_Num_Iterative(5);


//Reference : https://www.geeksforgeeks.org/program-to-print-first-n-fibonacci-numbers/