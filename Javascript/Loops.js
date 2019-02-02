// 8. The .pop() Method
const chores = ['wash dishes', 'do laundry', 'take out trash', 'cook dinner', 'mop floor'];

chores.pop();
console.log(chores.pop()); // Output: mop floor


//9. More Array Methods
const groceryList = ['orange juice', 'bananas', 'coffee beans', 'brown rice', 'pasta', 'coconut oil', 'plantains'];

groceryList.shift();
console.log(groceryList);
//The shift() method removes the first element from an array and returns that removed element. 

groceryList.unshift('popcorn');
console.log(groceryList);
//The unshift() methods adds one or more elements to the beginning of an array and returns the new length of the array.


console.log(groceryList.slice(1,4));
console.log(groceryList);//The slice() method returns a shallow copy of a portion of an array into a new array object selected from * begin * to * end *
//However, the orginal array will not be modified.
//form - arrayName.method(first, last+1);

const pastaIndex = groceryList.indexOf('pasta');
console.log(pastaIndex);
//The indexOf method returns the first index at which a given element can be found in the array, or -1 if it is not present.





// 10. Array and Function

const concept = ['arrays', 'can', 'be', 'mutated'];

function changeArr(arr){
  arr[3] = 'MUTATED';
};
changeArr(concept);
console.log(concept); // [ 'arrays', 'can', 'be', 'MUTATED' ]

function removeElement(newArr){
  newArr.pop();
};
removeElement(concept);
console.log(concept); // [ 'arrays', 'can', 'be' ]





// 11. Nested Arrays

const numberClusters = [[1,2], [3,4], [5,6]];
const target = numberClusters[2][1];

console.log(target); // 6


// Nestd Loops
const bobsFollowers = [ 'Ashely','Hailey', 'Mike', 'John' ];
const tinasFollowers = [ 'Ashely', 'Hailey', 'Amy'];
const mutualFollowers = [];
for(let i = 0; i < bobsFollowers.length; i++){
  for(let j=0; j < tinasFollowers.length; j++){
  	if(bobsFollowers[i] === tinasFollowers[j]){
       mutualFollowers.push(bobsFollowers[i]);
    };
  };
};


