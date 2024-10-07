<?php 
// Function to check wether a word is palindrome
function isPalindrome($wordToCheck) {
  $isPalindrome = false;
  $wordLength = strlen($wordToCheck);
  $wordLettersAnalyzed = $wordLength / 2 - ($wordLength % 2 / 2);
  for ($i = 0; $i <= $wordLettersAnalyzed - 1; $i++) {
    if ($wordToCheck[$i] !== $wordToCheck[$wordLength - 1 - $i]) return $isPalindrome;
  }

  return $isPalindrome = true;
}  
?>
