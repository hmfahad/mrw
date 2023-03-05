<?php

include("connection.php");

<<<<<<< HEAD
    
=======
$db = mysqli_connect('localhost', 'root', '', 'moviesite') or
    die ('Unable to connect, Check your connection parameters');
>>>>>>> f6ef0905f994139a90ebe3976f666af0a67aa5eb

   

<<<<<<< HEAD
  $sql = "CREATE TABLE movie (
=======
  //  $query = 'CREATE DATABASE IF NOT EXISTS moviesite';
   // mysqli_query($query, $db) or die (mysqli_error($db));

    //make sure our recently created database is the active one
    //mysql_select_db('moviesite', $db) or die (mysql_error ($db));

    //create the movie table

    /*

    $query = 'CREATE TABLE movie (
>>>>>>> f6ef0905f994139a90ebe3976f666af0a67aa5eb
        movie_id        INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT,
        movie_name      VARCHAR(255)        NOT NULL DEFAULT 0,
        movie_type      TINYINT             NOT NULL DEFAULT 0,
        movie_year      SMALLINT UNSIGNED   NOT NULL DEFAULT 0,
        movie_leadactor INTEGER UNSIGNED    NOT NULL DEFAULT 0,
        movie_director  INTEGER UNSIGNED    NOT NULL DEFAULT 0,

        PRIMARY KEY (movie_id),
        KEY movie_type (movie_type, movie_year)

   )";

<<<<<<< HEAD
   if($conn->query($sql) === TRUE){

        echo "Table Created Successfully";
   
    }
    else{
        echo "Unsuccessful". $conn->error;
    }
    
$conn->close();
=======
    */

    // ENGINE = MyISAM';

   // mysqli_query($query, $db) or die (mysql_error($db));
>>>>>>> f6ef0905f994139a90ebe3976f666af0a67aa5eb

    

<<<<<<< HEAD
/*

   CREATE TABLE movietype(
        movietype_id    TINYINT UNSIGNED    NOT NULL AUTO_INCREMENT,
        movietype_lable VARCHAR(100)    NOT NULL,
        PRIMARY KEY (movietype_id)
   );


        CREATE TABLE people (
=======
    /*

    $query = 'CREATE TABLE movietype(
        movietype_id    TINYINT UNSIGNED    NOT NULL AUTO_INCREMENT,
        movietype_lable VARCHAR(100)    NOT NULL,
        PRIMARY KEY (movietype_id)
        )
        ENGINE = MyISAM';
    mysql_query($query, $db) or die (mysql_error($db));
*/

    //create the people table

    /*
    $query = 'CREATE TABLE people (
>>>>>>> f6ef0905f994139a90ebe3976f666af0a67aa5eb
        people_id           INTEGER UNSIGNED        NOT NULL AUTO_INCREMENT,
        people_fullname     VARCHAR(255)            NOT NULL,
        people_isactor      TINYINT(1)  UNSIGNED    NOT NULL DEFAULT 0,
        people_isdirector   TINYINT(1)  UNSIGNED    NOT NULL    DEFAULT 0,

        PRIMARY KEY (people_id)
<<<<<<< HEAD
        );
=======
    )
    ENGINE = mariaDB';
>>>>>>> f6ef0905f994139a90ebe3976f666af0a67aa5eb
    
*/

<<<<<<< HEAD
?>
=======
    */

    echo 'Movie database successfully created';
    ?>
>>>>>>> f6ef0905f994139a90ebe3976f666af0a67aa5eb
