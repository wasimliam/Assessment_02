<?php

function processStrings($array) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    foreach ($array as $str) {
        $vowelCount = 0;
        $lowercaseStr = strtolower($str); 
        for ($i = 0; $i < strlen($lowercaseStr); $i++) {
            if (in_array($lowercaseStr[$i], $vowels)) {
                $vowelCount++;
            }
        }
        $reversedStr = strrev($str);
        echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];
processStrings($strings);
?>