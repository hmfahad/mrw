<?php
session_start();

//check to see if user has logged in with a valid password

if ($_SESSION['authuser'] !=1 ) {

    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();
}

?>


<html>
    <head>
        <title>
            <?php 
                if (isset($_GET['favmovie'])){
                    echo '-';
                    echo $_GET['favmovie'];
                }

            ?>
        </title>  
       
        

    </head>

    <body>
        <?php include 'header.php'; ?>

        <?php

            $favmovies = array(
                'Life of Brain',
                'Sripes',
                'Office Space',
                'The Holy Grail',
                'Matrix',
                'Terminato',
                'Star Trek IV',
                'Close Enconters of the Third Kind',
                'Sixteen Candlen',
                'Caddyshack'
            );


            

            if (isset($_GET['favmovie'])){
                
            

            echo 'Welcome to our site,';
            echo $_SESSION['username'];
            echo ' !<br/>';

            echo 'My favorite movie is ';
            echo $_GET['favmovie'];
            echo '<br/>';
            $movierate = 5;
            echo 'My movie rating for this movie is:';
            echo $movierate;

            } else {
                echo 'My top'. $_POST['num'] . 'favorite movies are: <br/>';

                if (isset($_POST['sorted'])){
                    sort($favmovies);
                }

                echo '<ol>';
                
                $num = 0;
                while($num<$_POST['num']){
                    echo '<li>';
                    echo $favmovies[$num];
                    echo '</li>';
                    $num++;
                }

                echo '</ol>';
               
               
            }
            
        ?>

        

    </body>


</html>