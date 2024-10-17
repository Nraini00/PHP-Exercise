<?php

// Array Sorting
// use bubble sort algorithm to sort an array of numbers.
// simplest sorting algorithm that works by repeatedly swapping the adjacent elements if they are in the wrong order.
// sort the array using multiple passes. After the first pass, the maximum element goes to end (its correct position). 
// Same way, after second pass, the second largest element goes to second last position and so on.

function BubbleSort (&$arr) 
{
    $a = sizeof($arr);

    // Traverse through all array elements
    for ($b = 0; $b < $a; $b++) 
    {
        $swapped = False;

        // Last b elements are already in place
        for ($c = 0; $c < $a - $b - 1; $c++)
        {
            // Traverse the array from 0 to a-b-1
            // Swap if the element found is greater than the next element
            if ($arr[$c] > $arr[$c + 1])
            {
                $d = $arr[$c];
                $arr[$c] = $arr[$c + 1];
                $arr [$c+1] =$d;
                $swapped = True;
            }
        }

        // If no two elements were swapped by inner loop, then break
        if ($swapped == False)
            break;
    }
}

$arr = array (64, 34, 25, 12, 22, 11, 90);
$len = sizeof($arr);
BubbleSort($arr);

// echo "Unsorted array";
// print_r($arr);
echo "List of Sorted Array using Bubble Sort : \n";
for ($x = 0; $x < $len; $x++)
    echo $arr[$x]." ";

//Reference: https://www.geeksforgeeks.org/bubble-sort-algorithm/

