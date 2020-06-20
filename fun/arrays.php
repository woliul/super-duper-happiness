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
    <title>Arrays</title>
</head>
<body>
    <?php
    $array1=array(1,7,5,8,9,6,2,11,25);
    echo $array1[0];
    echo "<br/>";
    $array2=array(array(6,2,11,25),7,5,8,9,6,2,11,25);
    echo $array2[0][2];echo "<br/>";
    $array2[1]=66;
    echo $array2[1];
    echo "<br/>";
    $array3=array("name"=>"john","address"=>"dhaka");
    echo $array3["name"];echo "<br/>";
    echo $array3["name"] ." ".$array3["address"];
    echo "<br/>";
    $array3["name"]="Barner";
    echo $array3["name"] ." ".$array3["address"]; echo "<br/>";
    ?>
    <pre><?php print_r($array3) //for debugging to see the array ?></pre>
    Count: <?php echo count($array2);?><br/>
    Max: <?php echo max($array1);?><br/>
    Min: <?php echo min($array1);?><br/>
    Sort: <pre><?php sort($array1); print_r($array1);?></pre><br/>
    Reverse Sort: <pre><?php rsort($array1);print_r($array1);?></pre><br/>
    Implode: <?php echo $array1 = implode(",",$array1); ?><br/>
    Explode: <?php print_r(explode(",",$array1)); //Convert CSV or Comma Separated Value to Array?><br/>
    In array= <?php echo in_array(8, $array2);//TRUE?> <br/>
    In array= <?php echo in_array(80, $array2);//FALSE?> <br/>
</body>
</html>