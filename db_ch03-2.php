<?php
//connet to mySQL

include("connection.php");


echo "<br>";
    //insert data into the movie table

    $sql = "INSERT INTO movie
            (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
            movie_director)
            VALUES
            (1, 'Bruce Almighty', 5, 2003, 1, 2),
            (2, 'Office Space', 5, 1999, 5, 6),
            (3, 'Grand Canyon', 2, 1991, 4, 3)";

    if ($conn->query($sql) === TRUE ){
        echo "Movie Table record created successfully";
        echo "<br>";
    } else {
        echo "Error in movie table: " . $sql . "<br>" . $conn->error;
        echo "<br>";
    }


   
    //insert data into the movietype table


    $sq = "INSERT INTO movietype
                (movietype_id, movietype_lable)
        VALUES  
                (1, 'Sc Fi'),
                (2, 'Drama'),
                (3, 'Adventure'),
                (4, 'War'),
                (5, 'Comedy'),
                (6, 'Horror'),
                (7, 'Action'),
                (8, 'Kids')";

        if ($conn->query($sq) === TRUE ){
                echo "Movietype Table Createed Successfull";
                echo "<br>";
        } else {
                echo "Error of movie type table:" . $sq . "<br>" . $conn->error;
                echo "<br>";
        }


        //Insert data into people table

                $s = "INSERT INTO people
                        (people_id, people_fullname, people_isactor, people_isdirector)
                VALUES
                        (1, 'Jim Carrey', 1, 0),
                        (2, 'Tom Shadyac', 0, 1),
                        (3, 'Lawrence Kasdan', 0, 1),
                        (4, 'Kevin Kline', 1, 0),
                        (5, 'Ron Livingston', 1, 0),
                        (6, 'Mike Judge', 0, 1)";

                if ($conn->query($s) === TRUE){
                        echo "Connection success of people table";
                        echo "<br>";
                } else {
                        echo "Error in people table" . $s . "<br>" . $conn->error;
                        echo "<br>";
                }
          
        //insert data into the people table

                $sql = 'INSERT INTO people
                        (people_id, people_fullname, people_isactor, people_isdirector)
                VALUES
                        (1, "Jim Carrey", 1, 0),
                        (2, "Tom Shadyac" 0, 1),
                        (3, "Lawrence Kasdan", 0, 1),
                        (4, "Kevin Kline", 1, 0),
                        (5, "Ron Livingston", 1, 0),
                        (6, "Mike Judge", 0, 1)';

        if ($conn->query($sql) === TRUE){
                 echo "People table record Created Successfully";
                 echo "<br>";
        } else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
                 echo "<br>";

        }

$conn->close();

?>
