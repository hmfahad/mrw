<?php
//connet to mySQL

$conn = new mysqli ('localhost', 'root','', 'moviesite');
    
        if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
        }

    

    //insert data into the movie table

    $sql = 'INSERT INTO movie
            (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
            movie_director)
            VALUES
            (1, "...bruce", 5, 2003, 1, 2),
            (2, "Office Space", 5, 1999, 5, 6),
            (3, "Grand Canyon", 2, 1991, 4, 3)';

    if ($conn->query($sql) === TRUE){
        echo "Movie table record Created Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    //insert data into the movietype table

/*
    $sql = 'INSERT INTO movietype
                (movietype_id, movietype_label)
        VALUES  
                (1, "Sci Fi"),
                (2, "Drama"),
                (3, "Adventure"),
                (4, "War"),
                (5, "Comedy"),
                (6, "Horror"),
                (7, "Action"),
                (8, "Kids")';

        if ($conn->query($sql) === TRUE){
                echo "Movietype table record Created Successfully";
        } else {
                echo "Error: " . $sql . "<br>" . $conn->error;

        }

        */
          
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
        } else {
                 echo "Error: " . $sql . "<br>" . $conn->error;

        }

                echo 'Data inserted Successfully!';




    ?>
