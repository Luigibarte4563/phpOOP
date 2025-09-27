<?php

$num1 = 10;
$num2 = 4;

try {
    echo "Dividing $num1 by $num2 <br>";

    if($num2 == 0) {
        throw new Exception("Cannot devide by zero! <br>");
    }

    $result = $num1 / $num2;
    echo "Result: $result <br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>" ;
}finally  {
    echo "Finally block executed. Cleaning up if needed. <br>";
}

