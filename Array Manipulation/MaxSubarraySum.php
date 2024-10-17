<?php 

// Find Maximum Subarray Sum using (Kadane's Algorithm).
// to look for all positive contiguous segments of the array (max_end_here)
// keep track of maximum sum contiguous segment among all positive segments (max_so_far)
// Each time we get a positive-sum compare it with max_so_far and update max_so_far if it is greater than max_so_far 

// to print largest
function maxSubArraySum($x, $size)
{
    $max_so_far = PHP_INT_MIN;
    $max_end_here = 0;

    for ($a = 0; $a <$size; $a++) 
    {
        $max_end_here = $max_end_here + $x[$a];
        if ($max_so_far < $max_end_here)
            $max_so_far = $max_end_here;

        if ($max_end_here < 0) 
            $max_end_here = 0;
    }
    return $max_so_far;
}

$x = array (-2, -3, 4, -1, -2, 1, 5, -3);
$b = count($x);
$max_total = maxSubArraySum($x, $b);

echo "Maximum Subarray Sum using (Kadane's Algorithm)";
echo "\nThe Maximum contiguous sum is : ", $max_total;

// Reference: https://www.geeksforgeeks.org/php-program-for-largest-sum-contiguous-subarray/


