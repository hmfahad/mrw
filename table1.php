
<?php



include("connection.php");

// Retrive information


$sql = "SELECT
        movie_name, movie_year, movie_director, movie_leadactor,
        movie_type
        FROM
            movie
        ORDER BY
            movie_name ASC,
            movie_year DESC";

    $result = $conn->query($sql);

    $numMovies = $result->num_rows;



 

?>











<div style= "text-align: center">

    <h2> Movie Review Database </h2>

    <table border = "1" cellpading = "2" cellspacing = "2" style = "width: 70%"; 
        margin-left: auto; margin-right: auto;>

        <tr>
            <th> Movie Title </th>
            <th> Year of Release </th>
            <th> Movie Director </th>
            <th> Movie Lead Actor </th>
            <th> Movie Type </th>

        </tr>

  


<?php



    while ($row = $result->fetch_assoc()){
        

        echo "<tr>";
        echo "<td>" . $row["movie_name"] . "</td>";
        echo "<td>" . $row["movie_year"] . "</td>";
        echo "<td>" . $row["movie_director"] . "</td>";
        echo "<td>" . $row["movie_leadactor"] . "</td>";
        echo "<td>" . $row["movie_type"] . "</td>";

        echo "</tr>";
    }

    


echo "</table>";

    echo " <br> <br> Number of Movies is : " . $numMovies;

?>
  


</div>

