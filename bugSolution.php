<?php
function calculateSum(array $numbers): int {
  //Check if the input is a valid array and contains only numbers
  if (!is_array($numbers) || !all(fn($num) => is_numeric($num), $numbers)) {
    throw new InvalidArgumentException("Invalid input: numbers must be a numeric array.");
  }

  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

// Example usage
$numbers = [1, 2, 3, 4, 5];
$sum = calculateSum($numbers);  //This will return 15
echo "Sum:" . $sum . "\n";

// Example of invalid input: non-numeric values
try {
  $numbers = [1, 2, 3, "a", 5];
  $sum = calculateSum($numbers); 
} catch (InvalidArgumentException $e) {
  echo "Error:" . $e->getMessage() . "\n";
}

// Example of invalid input: not an array
try {
  $numbers = "this is not an array";
  $sum = calculateSum($numbers);  
} catch (InvalidArgumentException $e) {
  echo "Error:" . $e->getMessage() . "\n";
}
?>