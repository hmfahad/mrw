<?php

include("connection.php");

    

   

  $sql = "CREATE TABLE movie (
        movie_id        INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT,
        movie_name      VARCHAR(255)        NOT NULL DEFAULT 0,
        movie_type      TINYINT             NOT NULL DEFAULT 0,
        movie_year      SMALLINT UNSIGNED   NOT NULL DEFAULT 0,
        movie_leadactor INTEGER UNSIGNED    NOT NULL DEFAULT 0,
        movie_director  INTEGER UNSIGNED    NOT NULL DEFAULT 0,

        PRIMARY KEY (movie_id),
        KEY movie_type (movie_type, movie_year)

   )";

   if($conn->query($sql) === TRUE){

        echo "Table Created Successfully";
   
    }
    else{
        echo "Unsuccessful". $conn->error;
    }
    
$conn->close();

    

/*

   CREATE TABLE movietype(
        movietype_id    TINYINT UNSIGNED    NOT NULL AUTO_INCREMENT,
        movietype_lable VARCHAR(100)    NOT NULL,
        PRIMARY KEY (movietype_id)
   );


        CREATE TABLE people (
        people_id           INTEGER UNSIGNED        NOT NULL AUTO_INCREMENT,
        people_fullname     VARCHAR(255)            NOT NULL,
        people_isactor      TINYINT(1)  UNSIGNED    NOT NULL DEFAULT 0,
        people_isdirector   TINYINT(1)  UNSIGNED    NOT NULL    DEFAULT 0,

        PRIMARY KEY (people_id)
        );
    
*/

?>