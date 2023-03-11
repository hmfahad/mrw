<?php

include("connection.php");

$query = "SELECT
            *
        FROM movie";

$result = $conn->query($query);

$table = <<<ENDHTML

<table border="1">
<caption> <h3> Movie Table </h3> </caption>
    <tr>
        <th>Movie Id </th>
        <th>Movie Name </th>
        <th>Movie Type </th>
        <th>Movie Year </th>
        <th>Movie Leadactor </th>
        <th>Movie Director </th>
    </tr>

ENDHTML;

    while($row=$result->fetch_assoc()){

        $table .=<<<ENDHTML

        <tr>
            <td>$row[movie_id]</td>
            <td>$row[movie_name]</td>
            <td>$row[movie_type]</td>
            <td>$row[movie_year]</td>
            <td>$row[movie_leadactor]</td>
            <td>$row[movie_director]</td>
        </tr>

ENDHTML;

    }
$table .=<<<ENDHTML

</table>

ENDHTML;

    $query = "SELECT
                    *
                FROM
                    movietype";

    $result = $conn->query($query);

    $table .=<<<ENDHTML

        <table border="1">
        
            <caption> <h3> Movie Type Table </h3> </caption>

            <tr>
                <th>Movie Type ID </th>
                <th>Movie Type Label </th>
            </tr>

ENDHTML;

    while($row=$result->fetch_assoc()){

        $table .= <<<ENDHTML

        <tr>
            <td> $row[movietype_id] </td>
            <td> $row[movietype_lable] </td>
        </tr>

ENDHTML;
    }
$table .= <<<ENDHTML

    </table>"

ENDHTML;


$query = "SELECT
                *
            FROM
                people";

$result = $conn->query($query);

$table .= <<<ENDHTML

    <table border = "1">
        <caption><h3> People Table </h3></caption>
        <tr>
            <th>People ID </th>
            <th>People Full Name </th>
            <th>People Is Actor </th>
            <th>People Is Director </th>
        </tr>

ENDHTML;

while($row = $result->fetch_assoc()){

    $table .=<<<ENDHTML

    <tr>
        <td>$row[people_id]</td>
        <td>$row[people_fullname]</td>
        <td>$row[people_isactor]</td>
        <td>$row[people_isdirector]</td>
    </tr>

ENDHTML;
}

$table .=<<<ENDHTML

</table>

ENDHTML;

    echo $table;

?>