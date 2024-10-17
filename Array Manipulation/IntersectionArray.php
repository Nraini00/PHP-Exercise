<?php

// Find Intersection of Arrays
// function that returns the common elements between two arrays.
// PHP provides an inbuilt function (array_intersect()) which returns the common elements (intersect) of two array
// array_intersect() returns array with preserved keys, we will use array_values() which will re-order the keys.

// make declaration of the array
$arr1 = array(2, 5, 7, 6, 9);
$arr2 = array(3, 2, 5, 6, 8);

// find intersect of both array
$result = array_intersect($arr1, $arr2);

// re-order keys
$result = array_values($result);

// print the final result array
print_r($result);



//Reference: https://www.geeksforgeeks.org/php-find-intersection-two-arrays/