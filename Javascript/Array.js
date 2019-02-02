/*
Arrays are JavaScript's way of making lists. 
Arrays can store any data types (including strings, numbers, and booleans). Like lists, arrays are ordered, meaning each item has a numbered position.
*/

// 3. Accessing Elements
const famousSayings = ['Fortune favors the brave.', 'A joke is a very serious thing.', 'Where there is love there is life.'];

const listItem = famousSayings[0];
console.log(famousSayings[2]); //Where there is love there is life.
console.log(famousSayings[3]); //undefined




//4. Update Elements
let groceryList = ['bread', 'tomatoes', 'milk'];
groceryList[1] = 'avocados';





//5. Arrays with let and const
//Variables declared with the const keyword cannot be reassigned. However, elements in an array declared with const remain mutable. 

let condiments = ['Ketchup', 'Mustard', 'Soy Sauce', 'Sriracha'];
const utensils = ['Fork', 'Knife', 'Chopsticks', 'Spork'];

condiments[0] = 'Mayo';

console.log(condiments); //['Mayo', 'Mustard', 'Soy Sauce', 'Sriracha']
condiments = ['Mayo'];

utensils[3] = 'Spoon'; 
console.log(utensils); // 'Fork', 'Knife', 'Chopsticks', 'Spoon' ]





//6. The .length property
//배열 the number of items를 확인-> .length
const objectives = ['Learn a new languages', 'Read 52 books', 'Run a marathon'];

console.log(objectives.length);



//built-in JavaScript methods

//7. The .push() Method
//	.push() allows us to add items to the end of an array. 
const chores = ['wash dishes', 'do laundry', 'take out trash'];
chores.push('sweeping floor', 'make own bed');
console.log(chores); //[ 'wash dishes','do laundry','take out trash', 'sweeping floor', 'make own bed' ]
// items were added by using the '.push' method 



