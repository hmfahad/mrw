<?php
session_start();

//check to see if user has logged in with a valid password

if($_SESSION['authuser'] !=1 ) {

    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();
}

?>


<html>
    <head>
        <title> Myt Movie Site - <?php echo $_GET['favmovie']; ?> </title>

    </head>

    <body>

        <?php

            echo 'Welcome to our site,';
            echo $_SESSION['username'];
            echo ' !<br/>';

            echo 'My favorite movie is ';
            echo $_GET['favmovie'];
            echo '<br/>';
            $movierate = 5;
            echo 'My movie rating for this movie is:';
            echo $movierate;
            
        ?>

        

    </body>


</html>