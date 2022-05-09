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
    H is for Horror: <br>
    When did the horror genre begin? 
    </h1>
    
    <body>
        <?php
// css disconnected last second and i havent been able to restablish it, sorry for the mess!
        
$hn= 'localhost'; 
$db= 'bwalte16_638'; 
$un= 'bwalte16_mysql'; 
$pw= 'VYQDu5_CjjHA'; 

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
    
    ?>
    </body>
    

<h3>
    

    
<a href=h_rating.php>
  <button>Sort by Rating</button>
</a>
<a href=by_year.php>
  <button>Sort by Year</button>
</a>
<a href=by_monster.php>
  <button>Sort by Monster</button>
</a>
    
    <div class="topnav">
  <div class="search-container">
    <form action="/template.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
    
    <p class="lead">

       It can be said the horror genre began with Georges Méliès in 1890 with The House of the Devil (1896) and The Bewitched Inn (1897), and soon after that releasing his most famous film, A Trip to the Moon (1902). Other’s say that the genre didn’t truly begin till it hit widespread popularity with the slasher Peeping Tom (1960), released slightly before Psycho (1960) and bringing horror out of niche obscurity. Despite the seminal works of Méliès or the popularity of 60’s slashers, it can be contested that the horror film was officially minted on January 1st, 1937. On that day, the British Board of Film Censors introduced their ‘H’ for Horrific certificate. This rating prevented persons under the age of sixteen from seeing any films so certified as ‘H’. Prior to this, horror films were given ‘A’ for Adult, meaning a person under the age of sixteen could be admitted accompanied by an adult, while still advertising it as being horrific in nature. </p> </h3>
    
<body>

<?php


$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

 
$query= "SELECT film_title, year_released FROM film 
ORDER BY RAND() LIMIT 1"
; 

$result= $conn->query($query);
if (!$result) die($conn->error);
    
$rows = $result->num_rows;


while ($row = $result->fetch_assoc()) {
echo 'What should you watch next?</h2>';
echo '  You should watch... ';
echo "<a href=\"template.php? film_title=".$row["film_title"]."\">" .$row["film_title"]. "</a>";
echo '(';
echo $row["year_released"]. ") <br>";
}
    
$result->close();
$conn->close();
    
?>
   
    
</body>
</html>
