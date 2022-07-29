/* Stack 스택 */

/* 
freeCodeCamp.org
https://youtu.be/Gj5qBheGOEo
*/

// functions: push, pop, peek(retrieve, 검색하다), length

let letters = [];

let word = 'racecar';

let rword = '';

// put letters of word into stack - 문자를 스택에 넣기
for (let i = 0; i < word.length; i++) {
    letters.push(word[i]);
}

// pop off the stack in reverse order - 역순으로 스택 pop하기
for (let i = 0; i < word.length; i++) {
    rword += letters.pop();
}

if (rword === word) {
    console.log(`word is a palindrome(회문).`)
} else {
    console.log(`word is not a palindrome(회문).`)
}

// Create the stack - 스택 구현한기
const Stack = function() {
    this.count = 0;
    this.storage = {};

// 1) adds a value onto the end of the stack
    this.push = function(value) {
        this.storage[this.count] = value;
        this.count++;
    }

    
    // Removes and returns the values at the end of the stack
    this.pop = function() {
        if (this.count === 0) {
            return undefined;
        }

        this.count--;
        const result -= 
    }


    this.peek = function() {
        return this.storage[this.count-1];
    }
}

const myStack = new Stack();
myStack.push(1);
console.log(myStack.peek())

// Returns the value at the end of the stack