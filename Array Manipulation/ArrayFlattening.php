<?php

// Array Flattening
// flatten a multidimensional array, converting it into a single-dimensional array.


// 1. Using Recursive
// traversing the nested arrays using recursion. It’s a clean and flexible method that works well for arrays of any depth.

function flattenRecursive($arr) 
{
    $res = [];

    foreach ($arr as $val) {
        if (is_array($val)) {
            $res =  array_merge($res, flattenRecursive($val));
        }
        else {
            $res[] = $val;
        }

    }
    return $res;
}

$arr = [1, [2, 3, [4, 5]], 6 ];
$flatArr = flattenRecursive($arr);

echo "Recursive method";
print_r($flatArr);

// 2. USing Stack
// uses an iterative method with a stack to flatten the array. It provides an alternative to recursion.

function flattenStack($arr) 
{
    $res = [];
    $stack = [$arr];

    while ($stack) {
        $current = array_shift($stack);

        foreach ($current as $value) {
            if (is_array($value)) {
                array_unshift($stack, $value);
            }
            else {
                $res[] = $value;
            }
        }
    }

    return $res;
}

$arr = [1, [2, 3, [4, 5]], 6];
$flatArr = flattenStack($arr);

echo "\nStack method";
print_r($flatArr);

// we can also use Using RecursiveIteratorIterator Class, Using array_walk_recursive()
// and Using array_reduce() and array_merge()

// https://www.geeksforgeeks.org/how-to-flatten-multidimentional-array-in-php/