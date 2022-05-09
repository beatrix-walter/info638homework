<!DOCTYPE html>
<html>

<head>
 <style>
<link rel="stylesheet" href="final.css">
</style>
</head>
    
<h1>
    Sorted by Monster <br>
    </h1>
    
  <h3>
    <a href=film_home.php>
  <button>Return to Home</button>
</a>
    </h3>
    
<body>

<?php



$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

 
$query= "SELECT film_title, monster_species FROM film 
JOIN lead_monster ON 
film.lead_monster_id=lead_monster.lead_monster_id; "
; 

$result= $conn->query($query);
if (!$result) die($conn->error);
    
$rows = $result->num_rows;


while ($row = $result->fetch_assoc()) {
echo "<a href=\"template.php? film_title=".$row["film_title"]."\">" .$row["film_title"]. "</a>";
echo '(';
echo $row["monster_species"]. ") <br>";
}
    
$result->close();
$conn->close();

?>
   
    
</body>
</html>
