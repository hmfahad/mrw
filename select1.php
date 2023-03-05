<?php

include("connection.php");

$sql = "SELECT
            movie_name, movie_type
        FROM 
            movie
        WHERE
            movie_year > 1990
        ORDER BY
            movie_type";

$result = $mysqli -> query($sql);

//show result
/*
while ($row = $result -> fetch_array(MYSQLI_ASSOC)){
  //  extract($row);

   // echo $movie_name . " - " . $movie_type . "<br/>";

printf ("%s (%s)\n", $row["movie_name"], $row["movie_type"]);



}

$result -> free_result();
$mysqli -> close();
*/

$result = $mysqli -> query($sql);


$row = $result -> fetch_array(MYSQLI_ASSOC);
printf("%s (%s)\n", $row["movie_name"], $row["movie_type"]);



$result -> free_result();


?>