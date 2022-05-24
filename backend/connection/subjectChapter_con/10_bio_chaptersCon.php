<?php

    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "STATE_10_BIO";

    $stateSubChapterDBCon = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);

    $sqlSTATE_CHAPTERS = "SELECT * FROM `10_BIO_CHAPTERS`";

    $result = mysqli_query($stateSubChapterDBCon, $sqlSTATE_CHAPTERS);

?>