<?php
//function Arguments
function FamilyName($Fname){
    echo "$Fname Smith.</br>";
}
familyName("John");
familyName("Jane");
familyName("Bob");
familyName("Elly");
familyName("Emy");
?>

<?php
function FamilyName2($fname, $BornYear){
    echo "$fname Smith was born in $BornYear</br>";
}
familyName2("John", "1961");
familyName2("Jane", "1960");
familyName2("Bob", "1996");
familyName2("Elly", "1991");
familyName2("Emy", "2000");
?>

<?php
function setHeight($minheight=5){
    echo "The height is :  $minheight </br>";
}
setHeight(350);
setHeight(); //default value -> 5
setHeight(135);
setHeight(80);
?>

<?php 
function sum($x, $y){
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = ". sum(5,10). "</br>";
echo "2 + 4 = ". sum(2,4). "</br>";
echo "8 + 9 = ". sum(8,9). "</br>";
?>


<?php
//array
$cars = array("Volvo", "BMW", "Hyundai");
echo "I like ". $cars[0]." ,".$cars[1]." and ".$cars[2]."</br>";
?>

<?php
$lunchMenu = array("Sandwich", "apple", "Juice");
echo count($lunchMenu)."</br>";
?>

<?php 
$cars = array("Volvo", "BMW", "Hyundai");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++){
    echo $cars[$x];
    echo "</br>";
}
?>