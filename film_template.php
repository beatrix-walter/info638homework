<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="spooky.css">
</head>

<h1>
    H is for Horror
    </h1>
    
<h2>
    <p class="lead">
When did the horror genre begin? 

</p>
       It can be said the horror genre began with Georges Méliès in 1890 with The House of the Devil (1896) and The Bewitched Inn (1897), and soon after that releasing his most famous film, A Trip to the Moon (1902). Other’s say that the genre didn’t truly begin till it hit widespread popularity with the slasher Peeping Tom (1960), released slightly before Psycho (1960) and bringing horror out of niche obscurity. Despite the seminal works of Méliès or the popularity of 60’s slashers, it can be contested that the horror film was officially minted on January 1st, 1937. On that day, the British Board of Film Censors introduced their ‘H’ for Horrific certificate. This rating prevented persons under the age of sixteen from seeing any films so certified as ‘H’. Prior to this, horror films were given ‘A’ for Adult, meaning a person under the age of sixteen could be admitted accompanied by an adult, while still advertising it as being horrific in nature. </h2>
    
<body>

<button type="button" class="btn btn-outline-dark">All</button>
<button type="button" class="btn btn-outline-dark">The A Rating</button>
<button type="button" class="btn btn-outline-dark">The H Rating</button>
<button type="button" class="btn btn-outline-dark">Banned Films</button>
<button type="button" class="btn btn-outline-dark">By Year</button>

<?php

$hn= 'localhost'; 
$db= 'bwalte16_638'; 
$un= 'bwalte16_mysql'; 
$pw= 'VYQDu5_CjjHA'; 

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

 
$query= "SELECT film_title, year_released FROM film 
ORDER BY RAND() LIMIT 1"
; 

$result= $conn->query($query);
if (!$result) die($conn->error);
    
$rows = $result->num_rows;
    
while ($row = $result->fetch_assoc()) {
echo '<h2>What should you watch next?</h2>';
echo 'You should watch... ';
echo $row["film_title"]." (".$row["year_released"]."). ";
}
    
$result->close();
$conn->close();
    
?>
   
    
</body>
</html>