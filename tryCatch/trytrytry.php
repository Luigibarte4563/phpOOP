<?php

$num1 = 10;
$num2 = 11;

try {
    if($num1 == $num2) {
        throw new Exception("they are equal number");
    }
    $result = $num1 = $num2;

    echo "total: " . $result . "<br>";
}catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}finally {
    echo "Done excuting the code <br> yey";
}