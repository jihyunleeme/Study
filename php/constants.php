<?php
define("GREETING","Welcome to W3shcools.com!");
echo GREETING;

/*
echo Greeting; // output Greeting and issues a notice. 
*/

?>

<?php //php7 Constant Arrays, we can create an Array using the define() function. 
define('ANIMALS', array( //
    'dog',
    'cat',
    'hedgdog'
));
echo ANIMALS[1]; // output cat
?>

<?php 
define("hello", "Welcome to W3school.com!");

/* Constants are Global */

function myTest(){
    echo hello;
}
myTest();
?>
