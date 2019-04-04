<?php

/* var_dump();

변수의 정보를 출력하는 함수.

int() : 정수
float() : 실수
string() : 문자열
array() : 배열

*/

$cars = array("Volvo", "BMW", "Hyundai");
var_dump($cars);


?>

<?php
//object
class Car{
    function Car(){
        $this->model = "VW";
    }
}

//create an Object
$herbie = new Car();

//show object properties
echo $herbie->model;
?>


<?php
//null in php
$x = "Hello World!";
$x = null;
var_dump($x);
?>


<?php
//Get the Lenght of a String
echo strlen("Hello World!"); // the ouput : 12
?>

<?php
//count the number of Words in a String
echo str_word_count("hello world! Nice to meet you"); // output : 6
?>

<?php
echo strrev("Hello world!"); 
/* reverse the words
output : !dlrow olleH
*/
?>

<?php 
//Search for a specific text within a String, the chracter position of the first match. if no match is found, it will return FALSE.
echo strpos("hello world! I love coding","love");
echo strpos("hello world! I love coding","programming");
?>