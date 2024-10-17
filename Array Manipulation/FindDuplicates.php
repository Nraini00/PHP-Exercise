<?php 

// Find Duplicates Elements in Array
// identifying and listing any values that appear more than once within the array

// 1. PHP array_diff_assoc() and array_unique() Functions
// PHP array_diff_assoc() -> function is used to find the difference between one or more arrays
// PHP array_unique() -> function is used to remove the duplicate elements from an array.

$arr = array (3, 5, 2, 5, 3, 9);

$findDuplicate = array_diff_assoc(
    $arr, array_unique($arr)

);

echo "array_diff_assoc() and array_unique() Method \n";
print_r($findDuplicate);


// 2. using for loop 

$arr1 = array (2, 3, 5, 3, 5, 9);

$length = sizeof($arr1);

echo "\n";
echo "For Loop Method \n";
for ($a = 0; $a < $length; $a++) {
    for ($b = $a + 1; $b < $length; $b++) {
        if ($arr1[$a] == $arr1[$b]) 
            echo $arr1[$a] . "\n";
    
    }

}

// other than that we also can use : array_count_values() and array_filter()
// Using array_filter and array_keys
// Using a Hash Map
// Using array_intersect and array_keys
// Using array_flip() and array_diff_key()

//Reference: https://www.geeksforgeeks.org/php-program-to-find-duplicate-elements-from-an-array/