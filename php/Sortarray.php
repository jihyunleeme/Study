<?php
//ascending alphabetical order
$cars = array("Volve", "BMW", "Hyundai");
sort($cars);

$Clength = count($cars);
for($x = 0; $x < $Clength; $x++ ){
    echo $cars[$x];
    echo "</br>";
}
?>

<?php
//decscending numberial order
$number = array(1,2,8,4,5,6,9);
sort($number);

$Nlength = count($number);
for($x = 0; $x < $Nlength; $x++){
    echo $number[$x];
    echo "</br>";
}
?>

<?php
//decscending order
echo "</br>decscending order arsort</br>";
$age = array("Peter"=>"45", "Sam"=>"24", "Tim"=>"32");
arsort($age);

foreach($age as $x => $x_value){
    echo "Key = " .$x. ", Value = ".$x_value;
    echo "</br>";
}
?>

<?php
//ascending order 
echo "</br>ascending order arsort</br>";
$age = array("Kai"=>"25", "Ben"=>"32", "Joe"=>"28");
krsort($age);

foreach($age as $x => $x_value){
    echo "Key = ".$x. ", Value = ".$x_value;
    echo "</br>";
}
?>