<?php

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {
    // Define vowels
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    // Iterate over each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    $vowelCount = countVowels($string);    // Count vowels
    $reversedString = strrev($string);     // Reverse the string

    // Print the original and modified strings with vowel count
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

