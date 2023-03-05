<?php

include("connection.php");


$sql = "SELECT movie.movie_name, movietype.movietype_lable

    FROM
        movie, movietype
    WHERE
        movie.movie_type = movietype.movietype_id
        AND movie_year > 1990
    ORDER BY
        movie_type";

        $result = $conn->query($sql);

        echo "<table border='1'>";
        while($row=$result->fetch_assoc()){

            echo "<tr>";
            echo "<td>";
            echo $row["movie_name"];
            echo "</td>";

            echo "<td>";
            echo $row["movietype_lable"];
            echo "</td>";

            echo "</tr>";
        }

        echo "</table>";

        






?>