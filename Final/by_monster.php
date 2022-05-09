<!DOCTYPE html>
<html>

<head>
 <style>

h1 {
  color: dimgray;
  font-family: American Typewriter, serif;
  font-size: 300%;
}
    h2 {
        text-align: center;
        color: dimgray;
        font-family: American Typewriter, serif;
        font-size: 120%;
    }
    body {
        border: 1px solid black;
        width: 1024px;
        margin: auto;
        text-align: center;
        color: dimgray;
        font-family: American Typewriter, serif;
        font-size: 150%;
    }
p {
  color: dimgrey;
  font-family: American Typewriter, serif;
  font-size: 80%;
}
button {
    color: dimgrey;
  font-family: American Typewriter, serif;
  font-size: 80%;   
    }
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
