function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

//This function will produce unexpected results if the input array contains non-numeric values or if it is not an array at all.

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers); // Correct usage: sum will be 15
console.log("Sum:", sum);

numbers = [1, 2, 3, "a", 5]; //Incorrect Usage: causes a type error
sum = calculateSum(numbers); //This will throw an error in some languages, in others may produce unexpected results
console.log("Sum:", sum); //This line may not execute

numbers = "this is not an array"; //Incorrect Usage: causes a type error
sum = calculateSum(numbers);
console.log("Sum:", sum); //This line may not execute