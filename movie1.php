<?php

   // Delete This line: setcookie('username', 'Joe', time() + 60);
    session_start();

    $_SESSION['username'] = $_POST['user'];
    $_SESSION['userpass'] = $_POST['pass'];
    $_SESSION['authuser'] = 0;
    

    //Check username and password information

    if(($_SESSION['username'] == 'Joe') and ($_SESSION['userpass'] == '12345')) {
        $_SESSION['authuser'] = 1;
    } else {
        echo 'Sorry, but you don\'t have permission to view this page!';
        exit();
    }

   // Delete this line $_SESSION['username'] = 'Joe12345';
   // $_SESSION['authuser'] = 1;

?>

<html>
    <head>
        <title> Find my Favorite Movie!</title>
    </head>


        <body>
            <?php
                $myfavmovie = urlencode('Life of Brain');
                echo "<a href=\"moviesite.php?favmovie=$myfavmovie\">";
                echo 'Click here to see information about my favorite movie!';
                echo '</a>';        

            ?>
            
        </body>

</html>
    