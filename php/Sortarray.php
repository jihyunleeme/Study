<?php
$cars = array("Volve", "BMW", "Hyundai");
sort($cars);

$Clength = count($cars);
for($x = 0; $x < $Clength; $x++ ){
    echo $cars[$x];
    echo "</br>";
}
?>

<?php
$number = array(1,2,8,4,5,6,9);
sort($number);

$Nlength = count($number);
for($x = 0; $x < $Nlength; $x++){
    echo $number[$x];
    echo "</br>";
}
?>