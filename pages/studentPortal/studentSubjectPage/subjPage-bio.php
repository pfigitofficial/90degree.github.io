<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: /90DEGREE/pages/studentPortal/studentHomePage.php");
}

// include '/Applications/XAMPP/xamppfiles/htdocs/90DEGREE/backend/connection/subjectChapter_con/10_bio_chaptersCon.php';
include '/Applications/XAMPP/xamppfiles/htdocs/90DEGREE/backend/connection/STATE/class10/Bio/chapters.php';


$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "STATE_10_BIO";

$STATE_CHPT_TPCDBCon = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/90DEGREE/css/general.css">
    <link rel="stylesheet" href="/90DEGREE/css/fonts.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentSubjectPage/subjPage-bio.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentSubjectPage/subjectmedia.css">

    <link rel="stylesheet" href="/90DEGREE/css/navDrawer/navDrawer.css">


    <title>Biology - STUDENT</title>
</head>

<body onload="btn1slide()">

    <header>
        <nav>
            <img src="/90DEGREE/img/menu.png" alt="" class="menuImage" onclick="openNav()">
            <img src="/90DEGREE/img/90degreelogo.png" alt="" class="ownerLogoImageafter">
        </nav>
    </header>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><?php echo $_SESSION['board'] ?></a>
        <a href="#"><?php echo $_SESSION['class'] ?></a>
        <a href="#"><?php echo $_SESSION['fullName'] ?></a>
        <a href="/90DEGREE/backend/authentication/logout.php">Logout</a>
    </div>


    <main>
        <div id="container01">
            <div id="infoContainer01">
                <h1 class="descriptorHeader" id="descriptorHeader01">Biology</h1>
                <p class="descriptorPara" id="descriptorPara01">6 Chapters | 30 Journeys</p>
            </div>


            <div id="infoContainer01-image">
                <img src="/90DEGREE/img/laboratory.png" alt="" class="infoContainerImage">
            </div>
        </div>
        <hr>

        <div id="container02">

            <div class="tab" id="tab01">
                <p class="descriptorPara" id="descriptorPara02">MCQ</p>
            </div>

            <div class="tab" id="tab02">
                <p class="descriptorPara" id="descriptorPara03">Solved School Papers</p>
            </div>

            <div class="tab" id="tab03">
                <p class="descriptorPara" id="descriptorPara04">Subjective Test</p>
            </div>

        </div>
        <hr>


        <?php

        while ($STATE_BIO_CHAPTER_row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="journeyContainer">
                <div class="journeyHeading">
                    <h1 class="journeyHeader"><?php echo $STATE_BIO_CHAPTER_row['chapterName']; ?></h1>
                </div>

                <div class="journeyTab-container">
                    <?php

                    $STATE_BIO_CHPTR_NAME = $STATE_BIO_CHAPTER_row['chapterName'];


                    
                    $STATE_BIO_CHAPTER_TOPIC_sql = "SELECT * FROM `10_BIO_CHAPTER_TOPICS` WHERE `chapterName`='$STATE_BIO_CHPTR_NAME'";





                    $STATE_TEST_RESULT = mysqli_query($STATE_CHPT_TPCDBCon, $STATE_BIO_CHAPTER_TOPIC_sql);


                    while ($STATE_BIO_CHAPTER_TOPIC_row = mysqli_fetch_assoc($STATE_TEST_RESULT)) {
                    ?>

                        <form action="/90DEGREE/pages/studentPortal/learnPortal/learnPortal-bio.php" method="post" class="chapterTopicForm">
                            <div class="journeyTab">

                                <label for="<?php echo str_replace(" ", "", $STATE_BIO_CHAPTER_TOPIC_row['chapterTopic']) ?>" class="learnTab-labels">
                                    <div class="journeyImage-container">
                                        <img src="/90DEGREE/img/laboratory.png" alt="" class="journeyImage">
                                    </div>
                                </label>

                                <label class="journeyLables"><?php echo $STATE_BIO_CHAPTER_TOPIC_row['chapterTopic']; ?></label>

                                <input type="text" value="<?php echo $STATE_BIO_CHAPTER_TOPIC_row['chapterTopic']; ?>" name="<?php echo str_replace(" ", "", $STATE_BIO_CHAPTER_TOPIC_row['chapterTopic']) ?>" hidden>

                                <input type="text" value="<?php echo $STATE_BIO_CHAPTER_row['chapterName'] ?>" name="chapterName" hidden>

                                <button type="submit" style="display: none;" id="<?php echo str_replace(" ", "", $STATE_BIO_CHAPTER_TOPIC_row['chapterTopic']) ?>"></button>

                            </div>
                        </form>
                    <?php
                    }
                    ?>

                    <a href="#" class="journeyTab-anchors">
                        <div class="journeyTab">
                            <div class="journeyImage-container">
                                <img src="/90DEGREE/img/practice.png" alt="" class="journeyImage">
                            </div>
                            <label class="journeyLables">PRACTICE</label>
                        </div>
                    </a>


                    <form action="/90DEGREE/pages/studentPortal/studentMCQ/mcq-bio.php" method="post" class="chapterTopicForm">

                        <div class="journeyTab">
                            <label for="<?php $STATE_BIO_CHAPTER_row['chapterName'];
                                        echo str_replace(" ", "", $STATE_BIO_CHAPTER_row['chapterName']) ?>" class="learnTab-labels">
                                <div class="journeyImage-container">
                                    <img src="/90DEGREE/img/remarks.jpg" alt="" class="journeyImage">
                                </div>
                            </label>
                            <label class="journeyLables">TEST</label>
                            <input type="text" class="" value="<?php echo $STATE_BIO_CHAPTER_row['chapterName']; ?>" name="<?php echo str_replace(" ", "", $STATE_BIO_CHAPTER_row['chapterName']); ?>" hidden>
                            <button type="submit" style="display: none;" id="<?php echo str_replace(" ", "", $STATE_BIO_CHAPTER_row['chapterName']); ?>"></button>
                        </div>

                    </form>


                </div>
            </div>
            <hr>
        <?php
        }
        ?>

    </main>

    <script src="/90DEGREE/js/navDrawer.js"></script>



    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>

</body>

</html>