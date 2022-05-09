<!DOCTYPE html>
<html>

<head>

 <style>
<link rel="stylesheet" href="final.css">
</style>

</head>
    
<h1>
    Sorted by Year <br>
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

 
$query= "SELECT film_title, year_released FROM film 
ORDER by year_released; "
; 

$result= $conn->query($query);
if (!$result) die($conn->error);
    
$rows = $result->num_rows;


while ($row = $result->fetch_assoc()) {
echo "<a href=\"template.php? film_title=".$row["film_title"]."\">" .$row["film_title"]. "</a>";
echo '(';
echo $row["year_released"]. ") <br>";
}
    
$result->close();
$conn->close();

?>
   
    
</body>
</html>
