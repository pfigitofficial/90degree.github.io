<?php

    session_start();

    $SERVER = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DBNAME = 'STATE_10_BIO';


    $bio_10_con = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);

    $CHAPTER = $_POST;
    foreach ($CHAPTER as $CHAPTER){}


    $sql = "SELECT * FROM `10_BIO_MCQ` WHERE `mcqChapter`='$CHAPTER' ORDER BY rand() LIMIT 10";

    $result = mysqli_query($bio_10_con, $sql);
    




?>