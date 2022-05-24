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
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentProgress/stdntSyllabusReport.css">

    <link rel="stylesheet" href="/90DEGREE/css/navDrawer/navDrawer.css">

    <title>Student Progress</title>
</head>
<body>

    <header>
        <nav>
            <img src="/90DEGREE/img/menu.png" alt="" class="menuImage" onclick="openNav()">
            <img src="/90DEGREE/img/90degreelogo.png" alt="" class="ownerLogoImage">
        </nav>
    </header>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><?php echo $_SESSION['fullName'] ?></a>
        <a href="/90DEGREE/backend/authentication/logout.php">Logout</a>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="/90DEGREE/backend/authentication/logout.php">Logout</a>
    </div>


    <main>
        <div class="selectorContainer">
            <button class="navButtons">Syllabus Report</button>
            <button class="navButtons">Performance</button>
        </div>

        <div class="chartProgress">
            <div class="progressChartBox">
                <div class="chartBox"></div>
                <label class="chartBox-label">LEARN</label>
            </div>

            <div class="progressChartBox">
                <div class="chartBox"></div>
                <label class="chartBox-label">PRACTICE</label>
            </div>
        </div>

        <div class="chartProgress-bar">

            <a href="/90DEGREE/pages/studentPortal/studentProgress/studentPerformance.html" class="progressBarBox-anchors">
                <div class="progressBarBox">
                    <div class="headerDiv"><h1 class="headerDiv-headers">Chapter Wise Analysis</h1></div>



                    <div class="charter">
                        <div class="infoContainer">
                            <div class="chapterDiv">
                                <div class="topicContaniers">
                                    <p class="info-para">Linear Equation</p>
                                </div>
                                <div class="BarContainer">
                                    <div class="progressBar">
                                        <div class="progressDone"></div>
                                    </div>
                                </div>
                                <div class="percentContainer">
                                    <p class="info-para">70%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="charter">
                        <div class="infoContainer">
                            <div class="chapterDiv">
                                <div class="topicContaniers">
                                    <p class="info-para">Quadratic Equations</p>
                                </div>
                                <div class="BarContainer">
                                    <div class="progressBar">
                                        <div class="progressDone"></div>
                                    </div>
                                </div>
                                <div class="percentContainer">
                                    <p class="info-para">70%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="charter">
                        <div class="infoContainer">
                            <div class="chapterDiv">
                                <div class="topicContaniers">
                                    <p class="info-para">Const of triangle</p>
                                </div>
                                <div class="BarContainer">
                                    <div class="progressBar">
                                        <div class="progressDone"></div>
                                    </div>
                                </div>
                                <div class="percentContainer">
                                    <p class="info-para">70%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

    </main>

    <script src="/90DEGREE/js/navDrawer.js"></script>

    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>
    <!-- https://www.figma.com/file/1nBOWhjAFDI9VDivBwdp0I/E-Learning---Mumbai?node-id=0%3A1 -->
</body>
</html>
