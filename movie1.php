<?php

    session_start();

    $_SESSION['username'] = $_POST['user'];
    $_SESSION['userpass'] = $_POST['pass'];
    $_SESSION['authuser'] = 0;
    

    //Check username and password information

    if(($_SESSION['username'] == 'Joe') and
     ($_SESSION['userpass'] == '12345')) {
        $_SESSION['authuser'] = 1;
    } else {
        echo 'Sorry, but you don\'t have permission to view this page!';
        exit();
    }



?>

<html>
    <head>
        <title> Find my Favorite Movie!</title>
    </head>


        <body>

            <?php include 'header.php' ?>

            <?php
                $myfavmovie = urlencode('Life of Brain');
                echo "<a href=\"moviesite.php?favmovie=$myfavmovie\">";
                echo 'Click here to see information about my favorite movie!';
                echo '</a>';        

            ?>

            <br>

            <a href = 'moviesite.php'> Click here to see my 10 movie. </a>
            
            </br>

            <a href ='moviesite.php? sorted=true'> Click here to see my top 10 mivies sorted alphabetticall. </a>

           
            
        </body>

</html>
    