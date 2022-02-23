<!DOCTYPE html>
<html>

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


</html>