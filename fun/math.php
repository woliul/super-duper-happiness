<?php
/**
 * Copyright (c) 2020. All rights reserved by Woliul Hasan. Fork me on https://github.com/hmwoliul
 */

/**
 * Created in PhpStorm.
 * Project Name: super-duper-happiness
 * User: Woliul Hasan
 * Date: 10-Jun-20
 * Time: 11:58 PM
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Math</title>
</head>
<body>
    <?php
    $num1=2;
    $num2=15;
    echo $num3=45*($num1+$num2)/$num2; echo "<br/>";
    $num2 +=4;
    echo $num2;echo "<br/>";
    $num4=$num3/$num2;
    echo $num4;echo "<br/>";
    echo round($num4,2);echo "<br/>"; //round to maximum precision like 2 means 1.02 or 3 mean 1.023
    echo ceil($num4);echo "<br/>"; //ceiling or heights number in decimal
    echo floor($num4);echo "<br/>"; //floor or lowest number in decimal
    $num5=$num1-$num2;
    echo abs($num5);echo "<br/>"; //absolute number
    echo pow($num1,3);echo "<br/>"; //exponential or power
    echo sqrt(81);echo "<br/>"; //square root
    echo fmod(20,7);echo "<br/>"; //modulo or vagsesh
    echo rand();echo "<br/>";
    echo rand(2,10);echo "<br/>";
    ?>
</body>
</html>