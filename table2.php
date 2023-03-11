<?php

//include("connection.php");

//take in the id of a director and return hir full name

function get_director($director_id){
 
    global $db;

    $query = "SELECT
            people_fullname
        FROM
            people
        WHERE
            people_id = " . $director_id;

    $result = $db->query($query);

    $row = $result->fetch_assoc();
    
   // $row->extract();

    return $row["people_fullname"];
}

//Take in the id of a lead actor and return his full name 

function get_leadactor($leadactor_id){

    global $db;

    $query = "SELECT
            people_fullname
        FROM 
            people
        WHERE
            people_id = " . $leadactor_id;

    $result = $db->query($query);

    $row = $result->fetch_assoc();
    
  // $row->extract();

    return  $row["people_fullname"];

}


//Take in the id of a movie type and return the maninful textua description

function get_movietype($type_id){
    
    global $db;

    $query = "SELECT 
                movietype_lable
            FROM
                movietype
            WHERE
                movietype_id = " . $type_id;

    $result = $db->query($query);

    $row = $result->fetch_assoc();

   // $row->extract();

    return $row["movietype_lable"];
}


//Connect to MySQL

$db = new mysqli("localhost", "root", "", "moviesite");

if(!$db){
    die ("Error database connection" . $db->connect_error());
} else {
    echo "DB connected sussessfully";
    echo "<br>"; 
}



//Check database
if($result = $db->query("SELECT DATABASE()")){
    $row = $result->fetch_row();
    echo "Current Default Database is : " .$row[0];
    echo "<br>";
    $result->close();
}

//Selecting Database
$db->select_db("moviesite");

//Check database
if($result = $db->query("SELECT DATABASE()")){
    $row = $result->fetch_row();
    echo "Current Default Database is : " .$row[0];
    echo "<br>";
    $result->close();
}


//Retrive information

$query = "SELECT
            movie_name, movie_year, movie_director, movie_leadacotr, movie_type
        FROM
            movie
        ORDER BY
            movie_name ASC,
            movie_year DESC";

$result = $db->query($query);

//Determine number of rows in returned result

$num_movies = $result->num_rows;

$table = <<<ENDHTML

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

ENDHTML;

    //Loop throuth the results

    while($row = $result->fetch_assoc()){
       // $row->extract();
        $director = get_director($row["movie_director"]);
        $leadactor = get_leadactor($row["movie_leadactor"]);
        $movietype = get_movietype($row["movie_type"]);

        $table .= <<<ENDHTML
        <tr>
            <td> $row[movie_name] </td>
            <td> $row[movie_year] </td>
            <td> $director </td>
            <td> $leadactor </td>
            <td> $movietype </td>
        </tr>
ENDHTML;
    
}

    $table .=<<<ENDHTML
    </table>
    <p> $num_movies Movies </p>
    </div>
ENDHTML;

    echo $table;

    $result->close();

?>