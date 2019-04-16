<?php
/* superglobal : always accessible, regardless of scope */

$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

addition();
echo $z;
echo "</br></br>";
?>

<?php
echo "</br></br>php \$_SERVER</br>";
echo "PHP_SELF : ";
echo $_SERVER['PHP_SELF']; //returns the filename of the currently executing script
echo "</br></br>SERVER_NAME : ";
echo $_SERVER['SERVER_NAME']; // returns the name of the host server
echo "</br></br>HTTP_HOST : ";
echo $_SERVER['HTTP_HOST']; // Host header from the current request
echo "</br></br> HTTP_USER_AGENT : ";
echo $_SERVER['HTTP_USER_AGENT'];
echo "</br></br>SCRIPT_NAME : ";
echo $_SERVER['SCRIPT_NAME'];
?>

<?php
echo "</br></br>\$_REQUEST is used to collect data after submitting an HTML form</br></br>";
?>
<html>
    <body>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        NAME : <input type="type" name="fname">
        <input type="submit">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $name = $_REQUEST['fname'];
                    if(empty($name)){
                        echo "Name is empty";
                    } else {
                        echo "제출된 이름 : $name";
                    }
                }
            
            ?>
    <body>
</html>
