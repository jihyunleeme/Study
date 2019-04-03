<!DOCTYPE html>
<html> 
<body>
<h1> My first php page</h1>
<?php
# comment 1

/*
 comment 2
multiple lines
*/

// comment 3

echo "echo1 1Hello World!";

?>

    <?php
    Echo "Hello World!</br>";
    EchO "Hello World!</br>";
    EcHo "Hello World!</br>";

    // however, all variable names are case-sensitive.

    // Declaring php variables
    

    $txt = "Hello World!";
    $x = 5;
    $y = 10.5;    
    
    $txt = "www.w3school.com";
    echo "I love the website, $txt!</br>"; 

    echo "I love {$txt} !"; 
    
    /* 작은 따옴표와 큰따옴표의 차이
    (.)을 사용하여 연산자와 변수를 결합할 수 있음.
    큰따옴표 :  결합연산자 (.)을 사용하지 않고 변수 끼워넣을 수 있찌만
    헷갈림을 방지하기위해 {$txt}와 같이 중괄호로 감싸자.
    */

    
    ?>

    <?php 
    //global key
    
    $x = 5;
    $y = 10;
    
    function myTest(){
    	global $x, $y;
    	$y = $x + $y;
    	
    }
    
    myTest();
    echo "</br>$y";
    ?>
    </body>
</html>