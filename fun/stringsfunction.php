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
    <title>Strings Functions</title>
</head>
<body>
<?php
    $stringOne = " bye bye lazy";
    $stringTwo = " dogs and cats";
    $stringNew = $stringOne;
    $stringNew .= $stringTwo;
    echo $stringNew;
    echo "<br />"
    ?>
    Lower Case: <?php echo strtolower($stringNew); ?><br/>
    Upper Case: <?php echo strtoupper($stringNew) ?><br/>
    Upper Case First Letter: <?php echo ucfirst($stringNew) ?><br/>
    Upper Case Words: <?php echo ucwords($stringNew) ?><br/>
    Length: <?php echo strlen($stringNew) ?><br/>
    Trim: <?php echo $stringFour= $stringOne.trim($stringTwo) ?><br/>
    Find: <?php echo strstr($stringNew, "cats") ?><br/>
    Replace: <?php echo str_replace("lazy", "fast", $stringNew) ?><br/>
    Repeat: <?php echo str_repeat($stringNew, 2) ?><br/>
    Substring: <?php echo substr($stringNew, 8, 19) ?><br/>
    Find Position: <?php echo strpos($stringNew, "dogs") ?><br/>
    Find Character: <?php echo strchr($stringNew, "s") ?><br/>
</body>
</html>