<?php

//Connect to mySQL

$db = mysqli_connect('localhost', 'username', 'password','mydb') or
    die ('Unable to connect, Check your connection parameters');

    //Create the main database ifit doesn't already exist

    $query = 'CREATE DATABASE IF NOT EXISTS moviesite';
    mysql_query($query, $db) or die (mysql_error($db));

    //make sure our recently created database is the active one
    mysql_select_db('moviesite', $db) or die (mysql_error ($db));

    //create the movie table

    $query = 'CREATE TABLE movie (
        movie_id        INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT,
        movie_name      VARCHAR(255)        NOT NULL DEFAULT 0,
        movie_type      TINYINT             NOT NULL DEFAULT 0,
        movie_year      SMALLINT UNSIGNED   NOT NULL DEFAULT 0,
        movie_leadactor INTEGER UNSIGNED    NOT NULL DEFAULT 0,
        movie_director  INTEGER UNSIGNED    NOT NULL DEFAULT 0,

        PRIMARY KEY (movie_id),
        KEY movie_type (movie_type, movie_year)

    )

    ENGINE = MyISAM';

    mysql_query($query, $db) or die (mysql_error($db));

    //Create the movietype table

    $query = 'CREATE TABLE movietype(
        movietype_id    TINYINT UNSIGNED    NOT NULL AUTO_INCREMENT,
        movietype_lable VARCHAR(100)    NOT NULL,
        PRIMARY KEY (movietype_id)
        )
        ENGINE = MyISAM';
    mysql_query($query, $db) or die (mysql_error($db));

    //create the people table
    $query = 'CREATE TABLE people (
        people_id           INTEGER UNSIGNED        NOT NULL ATUT_INCREMENT,
        people_fullname     VARCHAR(255)            NOT NULL,
        people_isactor      TINYINT(1)  UNSIGNED    NOT NULL DEFAULT 0,
        people_isdirector   TINYINT(1)  UNSIGNED    NOT NULL    DEFAULT 0,

        PRIMARY KEY (people_id)
    )
    ENGINE = MyISAM';
    
    mysql_query($query, $db) or die (mysql_error($db));

    echo 'Movie database successfully created';
    ?>