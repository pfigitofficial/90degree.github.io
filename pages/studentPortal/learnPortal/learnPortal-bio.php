<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: /90DEGREE/login-student.php");
}

$chapterName = $_POST['chapterName'];



$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB_NAME = "STATE_10_BIO";

$CHPTR_TPC_CON = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DB_NAME);

$CHPTR_TPC_SQL = "SELECT * FROM `10_BIO_CHAPTER_TOPICS` WHERE `chapterName`='$chapterName'";


$CHPTR_TPC_RESULT = mysqli_query($CHPTR_TPC_CON, $CHPTR_TPC_SQL);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/90DEGREE/css/general.css">
    <link rel="stylesheet" href="/90DEGREE/css/fonts.css">

    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/learnPortal/learnPortal.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/learnPortal/lrnPrtlDiffSubjCol.css">

    <link rel="stylesheet" href="/90DEGREE/css/navDrawer/navDrawer.css">


    <title>HOMEPAGE - STUDENT</title>
</head>

<body>

    <header>
        <nav>
            <img src="/90DEGREE/img/menu.png" alt="" class="menuImage" id="menuImageBar" onclick="openNav()">
            <img src="/90DEGREE/img/90degreelogo.png" alt="" class="ownerLogoImageafter">
        </nav>
    </header>


    <div class="modal" id="chatBoxModal">
        <div class="modalContent">
            <!-- <span class="close" id="chatBoxClose">&times;</span>-->

            <div class="chatBoxHeader">
                <div class="profilePic">
                    <img src="" alt="" id="chatProfileDP">
                </div>
                <p id="teacherDPName">Teacher 007</p>

                <span id="chatBoxClose" class="close">&times;</span>

                <div class="contactBtnDiv">
                    <div class="contactCrd"><img src="/90DEGREE/img/vidcam.png" alt="" class="contactCrdImages"></div>

                    <div class="contactCrd"><img src="/90DEGREE/img/phone.png" alt="" class="contactCrdImages"></div>
                </div>
            </div>


            <div class="chatBoxMain">

                <div class="msgBox-me">
                    <div class="meMsg">Hey!!!</div>
                </div>
                <div class="msgBox-them">
                    <div class="themMsg">Hey whats is your status now ae you free?</div>
                </div>

                <div class="msgBox-me">
                    <div class="meMsg">Hey I have notes for today.</div>
                </div>

                <div class="msgBox-them">
                    <div class="themMsg">Bro can you give me the notes for the Biology ICSE Standard 10. I was absent yesterday so i need to complete those notes.</div>
                </div>


            </div>


            <div class="chatBoxFooter">
                <form action="" method="post">
                    <input type="text" name="" id="" class="chatInput" placeholder="Enter your message">
                    <button class="chatButton">&#128206;</button>
                    <button class="chatButton">&#10004;</button>
                </form>
            </div>
        </div>
    </div>


    <div class="modal" id="diagramModal">
        <div class="modalContent">
            <span class="close" id="diagramClose">&times;</span>
            <div class="searchBox">
                <form action="" method="get" class="searchForms">
                    <input type="text" name="" id="" class="searchInputs" placeholder="Search for diagrams and images">
                    <button type="submit" class="searchButtons"></button>
                </form>
            </div>

            <div class="searchResultBox">
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
            </div>
        </div>
    </div>

    <div class="modal" id="videosModal">
        <div class="modalContent">
            <span class="close" id="videosClose">&times;</span>

            <div class="searchBox">
                <form action="" method="get" class="searchForms">
                    <input type="text" name="" id="" class="searchInputs" placeholder="Search for videos">
                    <button type="submit" class="searchButtons"></button>
                </form>
            </div>

            <div class="searchResultBox">
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
            </div>
        </div>
    </div>

    <div class="modal" id="simulationsModal">
        <div class="modalContent">
            <span class="close" id="simulationsClose">&times;</span>

            <div class="searchBox">
                <form action="" method="get" class="searchForms">
                    <input type="text" name="" id="" class="searchInputs" placeholder="Search for simulations">
                    <button type="submit" class="searchButtons"></button>
                </form>
            </div>

            <div class="searchResultBox">
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>

                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
                <div class="resBox"><img src="" alt="" class="resBoxImage"></div>
            </div>
        </div>
    </div>

    <div class="modal" id="toolsModal">
        <div class="modalContent">
            <span class="close" id="toolsClose">&times;</span>

            <div class="toolContainer">
                <div class="toolCard">
                    <img src="/90DEGREE/img/calculator.png" alt="" class="toolImage">Calculator
                </div>

                <div class="toolCard">
                    <img src="/90DEGREE/img/table.png" alt="" class="toolImage">Log Tables
                </div>

                <div class="toolCard">
                    <img src="/90DEGREE/img/graph.png" alt="" class="toolImage">Log Tables
                </div>
            </div>

        </div>
    </div>



    <main class="main-bio">
        <div class="workArea">
            <div class="superLeftDiv">
                <div class="chptrNamenDuration">
                    <h1 class="h1-bio"><?php echo $_POST['chapterName'] ?></h1>
                    <div class="timerBox">
                        <p class="timerPara">00:00</p>
                    </div>
                </div>

                <!-- Tabs HTML -->

                <?php
                ?>
                <div class="tab tab-bio">
                    <?php

                    while ($CHPTR_TPC_ROW = mysqli_fetch_assoc($CHPTR_TPC_RESULT)) {
                    ?>
                        <button class="tablinks tabLink-bio" onclick="openTopic(event, '<?php echo str_replace(" ", "", $CHPTR_TPC_ROW['chapterTopic']) ?>')"><?php echo $CHPTR_TPC_ROW['chapterTopic']; ?></button>
                    <?php
                    }
                    ?>

                </div>
                <?php
                ?>


                <div class="utilityBoxes">
                    <div class="utilityBox utilityBox-bio" id="chatBoxBtn">
                        <img src="/90DEGREE/img/chat.png" alt="" class="utlilityImage">Chat Box
                    </div>

                    <div class="utilityBox utilityBox-bio" id="diagramBtn">
                        <img src="/90DEGREE/img/diagram.png" alt="" class="utlilityImage">Diagram
                    </div>

                    <div class="utilityBox utilityBox-bio" id="videosBtn">
                        <img src="/90DEGREE/img/videos.png" alt="" class="utlilityImage">Videos
                    </div>

                    <div class="utilityBox utilityBox-bio" id="simulationsBtn">
                        <img src="/90DEGREE/img/simulations.png" alt="" class="utlilityImage">Simulations
                    </div>

                    <div class="utilityBox utilityBox-bio" id="toolsBtn">
                        <img src="/90DEGREE/img/tools.png" alt="" class="utlilityImage">Tools
                    </div>
                </div>


                



















                <?php  
                

                echo $testRow['chapterTopic'];
                
                
                ?>























                <?php
                $CHPTR_TPC_RESULT02 = mysqli_query($CHPTR_TPC_CON, $CHPTR_TPC_SQL);

                while($CHPTR_TPC_ROW02 = mysqli_fetch_assoc($CHPTR_TPC_RESULT02)){
                    ?>
                    <div id="<?php echo str_replace(" ", "", $CHPTR_TPC_ROW02['chapterTopic']) ?>" class="tabcontent">
                        <div class="contentBox">

                            <h1 class="topicHeading">Definition</h1>

                            <p class="contentPara-fullsize">When an object is moving in a straight line then the motion is set to be in <custom class="custom-bio"><?php echo $CHPTR_TPC_ROW02['chapterTopic'] ?></custom>
                            </p>

                            <div src="" alt="" class="contentBox-fullMedia"></div>
                        </div>
                        <script src="/90DEGREE/js/learPortal.js"></script>
                    </div>
                    <?php
                }
                ?>







                <!-- ENd Tabs -->

            </div>
        </div>
    </main>

    <script src="/90DEGREE/js/modal.js"></script>
    <script src="/90DEGREE/js/learPortal.js"></script>



    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>

</body>

</html>