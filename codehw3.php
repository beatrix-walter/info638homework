<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="tablestyles.css">
</head>
 
<body>

<?php 

function build_table($array){
    $table = '<table>';
    $table .= '<tr>';
foreach($array[0] as $key=>$value){
$table .= '<th>' . htmlentities($key) . '</th>';
        }
$table .= '</tr>';

 
foreach($array as $key=>$value){
    $table .= '<tr>';
foreach($value as $key2=>$value2){
    $table .= '<td>' . htmlentities($value2) . '</td>';
        }
        $table .= '</tr>';
    }

    // finish table and return it

    $table .= '</table>';
    return $table;
}

$array = array(
    array('title'=>'PHP and MySQL Web Development', 'author'=>'Luke Welling', 'page number'=>'144', 'type'=>'paperback', 'price' => '$31.63'),
    array('title'=>'Web Design with HTML, CSS, JavaScript and jQuery', 'author'=>'Jon Duckett', 'page number'=>'135', 'type'=>'paperback', 'price' => '$41.23'),
    array('title'=>'PHP Cookbook: Solutions & Examples for PHP Programmers', 'author'=>'David Sklar', 'page number'=>'14', 'type'=>'paperback', 'price' => '$40.88'),
    array('title'=>'JavaScript and JQuery: Interactive Front-End Web Development', 'author'=>'Jon Duckett', 'page number'=>'251', 'type'=>'paperback', 'price' => '$22.09'),
    array('title'=>'Modern PHP: New Features and Good Practices', 'author'=>'Josh Lockhart', 'page number'=>'7', 'type'=>'paperback', 'price' => '$28.49'),
    array('title'=>'Programming PHP', 'author'=>'Kevin Tatroe', 'page number'=>'26', 'type'=>'paperback', 'price' => '$28.96'),
);

echo build_table($array); 

?>
    
<?php
    $a = array('31.63, 41.23, 40.88, 22.09, 28.49, 28.96');
    
echo "Total = $" . array_sum($a) . "\n"; 
        
    
?>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="tablestyles.css">
</head>

<body>

<?php
// had to switch around my code from last week to be able to count # of flips, but now I cant figure out why I'm getting 1 extra flip at the end of the code - please let me know if you spot it!
$headsInARow = 3;
    echo "</br> Coin will stop flipping once it has landed on heads " . $headsInARow . " times in a row- </br>";
echo "<break>";
$heads = null;
$flipTotal = null;
while ($heads < 4) {
$flip = mt_rand(0,1);
		$flipTotal++;
if ($flip){
        $heads ++;
echo '<img src="head1.png"  width="100" height="100">' ;
		}
else {
$heads = null;
echo '<img src="tail1.png" width="100" height="100">';
		}
	}
echo "<p>Flipped " . $headsInARow . " in a row, in " . $flipTotal . " flips!</p>";
	?>

</body>
</html>