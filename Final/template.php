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
   Film Overview <br>
    </h1>
    
  <h3>
    <a href=film_home.php>
  <button>Return to Home</button>
           </h3>
</a>
    
<body>

<?php



$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

 
$query= "SELECT film_title,  year_released, short_description,
rating, production_company_name, 
director_fname, director_lname, 
monster_fname, monster_lname, monster_species
FROM film 
JOIN production_company ON 
film.production_company_id=production_company.production_company_id
JOIN director ON
film.director_id=director.director_id
JOIN lead_monster ON
film.lead_monster_id=lead_monster.lead_monster_id;"
; 

$result= $conn->query($query);
if (!$result) die($conn->error);
    
$rows = $result->num_rows;


while ($row = $result->fetch_assoc()) {
echo $row["film_title"]. "<br> In " 
    .$row["film_title"]. " (" 
    .$row["year_released"]. ") " .$row["short_description"]." It is rated " .$row["rating"].". It was produced by " .$row["production_company_name"]." and directed by " .$row["director_fname"]." " .$row["director_lname"].". The lead monster, " .$row["monster_fname"]." " .$row["monster_lname"].", is a " 
    .$row["monster_species"]. ". <br> ";
} 
    
$result->close();
$conn->close();

echo '<img src="markofavampire.jpeg" width="200" height="300">';
   ?>
     
    
   
    
</body>
</html>
