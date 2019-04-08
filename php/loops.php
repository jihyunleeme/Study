<?php

 /*
Comparison Operators

== equal
=== identical, $A eqal to $B and they are of the same type 
!= not equal
<> not equal
!== not identical

*/


/*
and     and
or      Or
xor     Xor
&&      And
||      OR
!       NOT

*/

$t = date("H");
$dateString = date("Y년 m월 j일 D요일");
echo "날짜 : {$dateString} </br>";

if($t < "20"){
    echo "Have a nice day!</br>";
    
    }

?>

<?php
// if... elseif...else
if($t < "10"){
    echo "Have a good morning</br>";
}elseif($t < "20"){
    echo "Have a good day!</br>";
}else{
    echo "Have a good night</br>";
}
?>


<?php
//switch1
$favcolor = "red";

switch($favcolor){
    case "red":
        echo "Me, either!</br>";
        break;
    case "green":
        echo "That's my second favorite color!</br>";
        break;
    case "black":
        echo "black is always right</br>";
        break;
    case "yellow":
        echo "yellow is pretty</br>";
        break;
    default:
        echo "Your favorite color is neither red, green, black, nor yellow!</br>";
}

?>

<?php
//switch2
$favfood1 = "떡볶이";
$favfood2 = "샌드위치";

switch($favfood2){
    case '샌드위치';
        echo "샌드위치도 나쁘지 않습니다";
        break;
    case '떡볶이':
        echo "축하합니다, 맞추셨습니다.";
        break;
    default:
        echo "샌드위치와 떡볶이 중에 어느것일까요?";
        break;
}
?>

<?php 
    //while Loops
    echo "</br>while Loops</br>";
    $x = 1;
    $y = 1;

    while($x <= 5) {
        echo "The number is : $x </br>";
        $x++;
    }
    
    //do...while Loops
    echo "</br>do...while Loops</br>";
    do{
        echo "The number is : $y </br>";
        $y++;
    }while($y <= 5);
?>

<?php 
    //for Loops
    echo "</br>for Loops</br>";

    for($x = 0; $x <= 10; $x++){
        echo "The number is : $x </br>";
    }
?>

<?php 
    /*
    foreach Loops
    배열에만 동작하는 반복문 foreach
    */
    echo "</br>foreach Loops</br>";
    $color = array("red", "green", "blue", "yellow");

    foreach ($color as $key => $value) {
        echo "$value </br>";
    }
?>

<?php 
    //function
    function writeMsg(){
        echo "Hello World!";
    }
    writeMsg(); //call the function

?>