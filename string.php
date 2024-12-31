<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($strings) {
    // Define the vowels
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    
    // Initialize the count
    $count = 0;

    // Iterate through each character in the string
    for ($i = 0; $i < strlen($strings); $i++) {
        if (in_array($strings[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

// Iterate over the array of strings
foreach ($strings as $string) {
    // Count the vowels in the string
    $vowelCount = countVowels($string);

    // Reverse the string
    $reversedString = strrev($string);

    // Print the results
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}





// $fruits = ["apple", "banana", "cherry"];
// if (in_array("banana", $fruits)) {
//     echo "Banana is in the list!";
// } else {
//     echo "Banana is not in the list.";
// }


?>
