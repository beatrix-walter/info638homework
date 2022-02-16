<!DOCTYPE html>
<html>

<h2 style="background-color:blue;color:white">
<?php

//isbn validator 

function myNumber($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10) {


if ($n10 < 10) {
echo "Checking isbn: $n1$n2$n3$n4$n5$n6$n7$n8$n9";
echo "$n10 for validity...";
    
$isbnTotal= (10 * $n1) + (9 * $n2) + (8 * $n3) + (7 * $n4) + (6 * $n5) + (5 * $n6) + (4 * $n7) + (3 * $n8) + (2 * $n9) + ($n10);
$Result = $isbnTotal / 11;
return $Result;

}

else {
echo "Checking isbn: $n1$n2$n3$n4$n5$n6$n7$n8$n9";
echo "X for validity...";
    
$isbnTotal= (10 * $n1) + (9 * $n2) + (8 * $n3) + (7 * $n4) + (6 * $n5) + (5 * $n6) + (4 * $n7) + (3 * $n8) + (2 * $n9) + 10;
$Result = $isbnTotal / 11;
return $Result;}

}


$X = 10;

//if ISBN ends in X, please use variable $X to represent it
    
$isbnRemander = myNumber(1, 5, 6, 8, 8, 1, 1, 1, 1, $X);


    

    
if (is_int($isbnRemander)) {
    echo "This is a valid!";
}
else {
    echo "This is not valid!";
}

?>


</h2>

<h2 style="background-color:black;color:white">

<head>
Coin Toss!
</head>
<body>


<?php
//cointoss

echo "</br> Flipping coin 1 time- </br>";
echo "<break>";

    function flipOne() {
        return mt_rand(0,1);
    }

// flipping once
$oneFlip = 1;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
echo "<break>";
echo "<break>";

// flipping 3 times

echo "</br> Flipping coin 3 times- </br>";
echo "<break>";
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
echo "<break>";

// flipping 5 times

    
echo "</br> Flipping coin 5 times- </br>";
echo "<break>";
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
echo "<break>";
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
echo "<break>";

// flipping 7 times

    
echo "</br> Flipping coin 7 times- </br>";
echo "<break>";
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
echo "<break>";
    
// flipping 9 times

    
echo "</br> Flipping coin 9 times- </br>";
echo "<break>";
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
$oneFlip = null;
$oneFlip = flipOne();
    echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
echo "<break>";
    

?>

<?php
// stop after 2 heads

echo "</br> Coin will stop flipping once it has landed on heads 2 times in a row- </br>";
echo "<break>";
function twoInARow () {
    return mt_rand(0,1);
}

$lastFlip = null;
$oneFlip = null;
echo "<break>";   
do {
    if ($oneFlip !== null) {
        $lastFlip = $oneFlip;
}  
    $oneFlip = twoInARow(); 
echo ($oneFlip ? '<img src="head.jpg"  width="100" height="100">' : '<img src="tail.jpg" width="100" height="100">'); 
echo "<break>";
}   while ($lastFlip + $oneFlip != 2); 


?>
</h2>

</body>
</html>