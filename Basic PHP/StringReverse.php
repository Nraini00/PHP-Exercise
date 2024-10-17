<?php

// A string can be reversed either using strrev() function or simple PHP code

// 1. without using  strrev()

$name = "AINI";
$a = 0;
while(!empty($name[$a])) {
    $a++;
}

echo "Normal Php Reverse String : ";
for($b = ($a-1); $b >= 0; $b--) {
    echo $name[$b];
}


//2. strrev() function
$result = "CAT DOG";
echo "\nReverse String using strrev() function : ".strrev($result);


// Reference : https://www.geeksforgeeks.org/php-reverse-string/