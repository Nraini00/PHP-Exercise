<?php 

// Palindrome Checker
// Create a function that checks if a given string is a palindrome.
// A number or string is said to be a palindrome if it remains same even after reversing the digits or letters respectively.

// 1. using strrev() 
// It is used in PHP to reverse a string. We can simply use this method to reverse the string and match it with the previous value. 
// If it is a match, then the string is palindrome else not. 

function Palindrome ($string) 
{
    if (strrev ($string) == $string) {
        return 1;
    }
    else {
        return 0;
    }
}

echo "strrev() Method";
$result = "CAT";
echo ("\n".$result);

if (Palindrome($result)) {
    echo "\nThat text is a Palindrome";
}
else {
    echo "\nThat text is Not a Palindrome";
}

// 2. Recursive way using substr()
// substr() method is used to return a part of a string, referred to as the substring. Using this method, 
// there is a recursive way to check for Palindrome or not. In this method no new string is formed and the original string is modified in each recursive call. 

function Palindrome2 ($string) 
{
    // Base condition to end recursive
    if ((strlen($string) == 1 || (strlen($string) == 0))) {
        echo "\nThat text is a Palindrome";
    }

    else {
        // FIrst character is compared with the last one
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) {

            // Checked letters are discarded and passed for the next call
            return  Palindrome2(substr($string,1,(strlen($string) - 2)));
        }
        else {
            echo "\nThat text is Not a Palindrome";
        }
    }
}

echo "\n";
echo "\nRecursive way using substr() Method";
$string = "MALAYSIA";
echo ("\n".$string);
Palindrome2($string);


// Reference : https://www.geeksforgeeks.org/php-palindrome-check/