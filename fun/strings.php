<?php
/**
 * Copyright (c) 2020. All rights reserved by Woliul Hasan. Fork me on https://github.com/hmwoliul
 */

/**
 * Created in PhpStorm.
 * Project Name: super-duper-happiness
 * User: Woliul Hasan
 * Date: 10-Jun-20
 * Time: 11:35 PM
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Strings</title>
</head>
<body>
<?php
    // strings can work with echo and declare in any variable with ""(Double Quote)
    echo "Hello Strings";
    echo "<br/>";
    $string = "This Declare by Variable";
    echo $string;
    echo "<br/>";
    //Concatenation or using . (Dot) can join two separate string even its a different variable
    $newVar = " & Joint it by .(Dot) or Concatenation";
    echo $string . $newVar;
    echo "<br/>";
    echo "{$string}.";
?>
</body>
</html>
