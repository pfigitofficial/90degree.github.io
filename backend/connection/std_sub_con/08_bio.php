<?php

    $SERVER = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DBNAME = 'STATE_08_BIO';


    $bio_10_con = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);

    $sql = "SELECT * FROM `08_BIO_MCQ` WHERE `mcqChapter`='forceAndPressure' ORDER BY rand() LIMIT 10";

    $result = mysqli_query($bio_10_con, $sql);




?>