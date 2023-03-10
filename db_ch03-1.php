
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
   

    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
        die ("Connection failed: ". $conn->connect_error);

    }else{
        echo "DB Connected <br>";
    }

    //Deleting Database

    $query = "DROP DATABASE moviesite";

    if($conn->query($query) === TRUE ){
        echo "Moviesite Database Deleted Success fully";
        echo "<br>";
    } else {
        echo "Error deleting database" . $conn->error;
        echo "<br>";
    }


    // Creating Data base

    $query = "CREATE DATABASE IF NOT EXISTS moviesite";

    if($conn->query($query) === TRUE ){

        echo "Database created sussessfully <br>";
    } else {
        echo "Error creating database <br>: " . $conn->error;
    }

// Return name of current default database

if ($result = $conn->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    echo "Default database is :" . $row[0];
    echo "<br>";
    $result->close();
}



    //Selecting Database moviesite

    $conn ->select_db("moviesite");

    
  // Return name of current default database

if ($result = $conn->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    echo "Default database is " . $row[0];
    echo "<br>";
    $result->close();
}

    //Creating Table movie


    $query = "CREATE TABLE movie (
        movie_id        INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT,
        movie_name      VARCHAR(255)        NOT NULL DEFAULT 0,
        movie_type      TINYINT             NOT NULL DEFAULT 0,
        movie_year      SMALLINT UNSIGNED   NOT NULL DEFAULT 0,
        movie_leadactor INTEGER UNSIGNED    NOT NULL DEFAULT 0,
        movie_director  INTEGER UNSIGNED    NOT NULL DEFAULT 0,

        PRIMARY KEY (movie_id),
        KEY movie_type (movie_type, movie_year)

   )";

   if ($conn->query($query) === TRUE ){
    echo "Movie Table created successfully";
    echo "<br>";
   } else {
    echo "Error creating table movie: " . $conn->error; 
    echo "<br>";
   }


 //Creating Table movietype

  $query = "CREATE TABLE movietype(
        movietype_id    TINYINT UNSIGNED    NOT NULL AUTO_INCREMENT,
        movietype_lable VARCHAR(100)    NOT NULL,
        PRIMARY KEY (movietype_id)
   )";


if ($conn->query($query) === TRUE ){
    echo "Movietype Table created successfully";
    echo "<br>";
   } else {
    echo "Error creating table movietype: " . $conn->error; 
    echo "<br>";
   }

    //create the people table

    $query = "CREATE TABLE people (
        people_id           INTEGER UNSIGNED        NOT NULL AUTO_INCREMENT,
        people_fullname     VARCHAR(255)            NOT NULL,
        people_isactor      TINYINT(1)  UNSIGNED    NOT NULL DEFAULT 0,
        people_isdirector   TINYINT(1)  UNSIGNED    NOT NULL    DEFAULT 0,

        PRIMARY KEY (people_id)
        )";

if ($conn->query($query) === TRUE ){
    echo "people Table created successfully";
    echo "<br>";
   } else {
    echo "Error creating table people : " . $conn->error; 
    echo "<br>";
   }


$conn->close();

 ?>