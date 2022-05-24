<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: /90DEGREE/login-student.html");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/90DEGREE/css/general.css">
    <link rel="stylesheet" href="/90DEGREE/css/fonts.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentSubjectPage/subjPage-artedu.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentSubjectPage/subjectmedia.css">

    <link rel="stylesheet" href="/90DEGREE/css/navDrawer/navDrawer.css">


    <title>Art & Education - STUDENT</title>
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
        <a href="#"><?php echo $_SESSION['fullName'] ?></a>
        <a href="/90DEGREE/backend/authentication/logout.php">Logout</a>
    </div>


    <main>
        <div id="container01">
            <div id="infoContainer01">
                <h1 class="descriptorHeader" id="descriptorHeader01">Art & Education</h1>
                <p class="descriptorPara" id="descriptorPara01">6 Chapters | 30 Journeys</p>
            </div>


            <div id="infoContainer01-image">
                <img src="/90DEGREE/img/art.png" alt="" class="infoContainerImage">
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

        <div class="journeyContainer">
            <div class="journeyHeading">
                <h1 class="journeyHeader">Real Numbers</h1>
            </div>

            <div class="journeyTab-container">
                <div class="journeyTab">
                    <div class="journeyImage-container">
                        <img src="/90DEGREE/img/compass.png" alt="" class="journeyImage">
                    </div>
                    <label class="journeyLables">Euclids division theorem</label>
                </div>

                <div class="journeyTab">
                    <div class="journeyImage-container">
                        <img src="/90DEGREE/img/compass.png" alt="" class="journeyImage">
                    </div>
                    <label class="journeyLables">Euclids division theorem</label>
                </div>

                <div class="journeyTab">
                    <div class="journeyImage-container">
                        <img src="/90DEGREE/img/compass.png" alt="" class="journeyImage">
                    </div>
                    <label class="journeyLables">Euclids division theorem</label>
                </div>

                <div class="journeyTab">
                    <div class="journeyImage-container">
                        <img src="/90DEGREE/img/compass.png" alt="" class="journeyImage">
                    </div>
                    <label class="journeyLables">Euclids division theorem</label>
                </div>

                <div class="journeyTab">
                    <div class="journeyImage-container">
                        <img src="/90DEGREE/img/compass.png" alt="" class="journeyImage">
                    </div>
                    <label class="journeyLables">Euclids division theorem</label>
                </div>

                <div class="journeyTab">
                    <div class="journeyImage-container">
                        <img src="/90DEGREE/img/compass.png" alt="" class="journeyImage">
                    </div>
                    <label class="journeyLables">Euclids division theorem</label>
                </div>
            </div>

        </div>

        <hr>

    </main>

    <script src="/90DEGREE/js/navDrawer.js"></script>


    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>

</body>

</html>