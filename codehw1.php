<!DOCTYPE html>
<html>
<body>
<?php

$change = 159;
$dollar = 100;

echo "Challenge 1: Correct Change";
echo "<br>";
echo "<br>";
echo "You are due $change cents back in change total.";
echo "<br>";

// Dollars 

if ($change >= 100 && $change < 200) {
	echo "Your change is: 1 dollar, ";
}

// Quarters
    
$qchange = $change - $dollar;


if ($qchange >= 75) {
    echo "3 quarters, ";
}   elseif ($qchange <= 75 && $qchange >= 50) {
    echo "2 quarters, "; 
}   elseif (qchange < 50 && $qchange >= 25) {
    echo "1 quarter, ";
}   elseif ($qchange < 25) {echo "0 quarters, ";
    }

if ($qchange >= 75) {
    $dchange = $qchange - 75;
}  elseif ($qchange <= 75 && $qchange >= 50) {
    $dchange = $qchange - 50;
}   elseif ($qchange < 50 && $qchange >= 25) {
    $dchange = $qchange - 25;
}   elseif ($qchange < 25) {
    $qchange = $dchange - 0;
}

// Dimes

if ($dchange >=20) {
    echo "2 dimes, ";
}   elseif ($dchange < 20 && $dchange >= 10) {
    echo "1 dime, ";
}   elseif ($dchange < 10) { echo "0 dimes, ";
    }

if ($dchange >= 20) {
    $nchange = $dchange - 20;
}   elseif ($dchange <= 20 && $dchange >= 10) 
{
    $nchange = $dchange - 10;
}   elseif ($dchange < 10) {
    $nchange = $dchange - 0;
}

// Nickels

if ($nchange < 10 && $nchange >= 5) {
    echo "1 nickle, ";
}   elseif ($dchange < 5) {
    echo "0 nickles, ";
}

if ($nchange < 10 && $nchange >= 5) {
    $pchange = $nchange - 5;
}   elseif ($nchange < 5) {
    $pchange = $nchange - 0;
}

// Pennies - whatever is leftover after all that
    
echo "and $pchange pennies.";
echo "<br>";
echo "<br>";

?>
    
<?php

echo "Challenge 2: 99 Bottles of Beer";
echo "<br>";
echo "<br>";

// Bottles 99 through 3

$beers = 99;
  while ($beers > 2) {
    echo "$beers bottles of beer on the wall, ";
    echo "$beers bottles of beer! ";
    --$beers;
    echo "<br>";
    echo "You take one down and pass it around-</br>";
    echo "$beers bottles of beer on the wall!";
    echo "<br>";
    echo "<br>";
      
} 

// Couldn't get the syntax right of bottles -> bottle for a singular beer without echoing out the whole phrase. 

    echo "2 bottles of beer on the wall, 2 bottles of beer!";
    echo "<br>";
    echo "You take one down pass it around-";
    echo "<br>";
    echo "1 bottle of beer on the wall!";
    echo "<br>";
    echo "<br>";
    echo "1 bottle of beer on the wall, 1 bottle of beer!"; 
    echo "<br>";
    echo "You take one down and pass it around-";
    echo "<br>";
    echo "<strong> Bodega run! </strong>";
    echo "<br>";

?>

</body>
</html>