<?php

include("connection.php");

echo "<br>";
echo "<br>";

$sql = "SELECT
            movie_name, movie_type
        FROM 
            movie
        WHERE
            movie_year > 1900
        ORDER BY
            movie_type";

//$result = $mysqli->query($sql);

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



$result = $conn->query($sql);


if($result->num_rows >0){

    


echo "<table border='1'>";



while($row = $result->fetch_assoc() ){
    echo "<tr>";
    echo "<td>";
    echo $row["movie_name"];
    echo "</td>";

    echo "<td>";
    echo $row["movie_type"];
    echo "</td>";
    echo "</tr>";
}

echo "</table>";




    

} else {
    echo "0 results";
}

$conn->clone();


?>