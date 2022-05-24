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
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentProgress/studentProgress.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentProgress/studentProgress-media.css">

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


    <main>
        <div class="progressContainer">
            <div class="subjectContainer" id="eng">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-english">English</h1>
                </div>

                <a href="/90DEGREE/pages/studentPortal/studentProgress/student-syllabusreport.php" class="infoContainer-anchors">
                    <div class="infoContainer eng-infoContainer">

                    <div class="barContainer">
                        <div class="progressBar progressBar-english">
                            <div class="progressDone progressDone-english" data-done="70"></div>
                        </div>

                        <div class="progressBar progressBar-english">
                            <div class="progressDone progressDone-english" data-done="70"></div>
                        </div>

                        <div class="progressBar progressBar-english">
                            <div class="progressDone progressDone-english" data-done="70"></div>
                        </div>

                        <div class="progressBar progressBar-english">
                            <div class="progressDone progressDone-english" data-done="70"></div>
                        </div>

                    </div>

                    <div class="barContainer" id="barContainer02">
                        <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                        <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                        <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                        <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                    </div>

                    <div class="barContainer" id="barContainer03">
                        <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                        <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                        <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                        <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                    </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="hin">
                <div class="headerContainer headerContainer-hindi">
                    <h1 class="subjHeaders subjHeaders-hindi">Hindi</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer hin-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-hindi">
                                <div class="progressDone progressDone-hindi" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-hindi">
                                <div class="progressDone progressDone-hindi" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-hindi">
                                <div class="progressDone progressDone-hindi" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-hindi">
                                <div class="progressDone progressDone-hindi" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="50"><p class="pregressDesc-para">50%</p></div>
                            <div class="progressInfo" data-done="50"><p class="pregressDesc-para">50%</p></div>
                            <div class="progressInfo" data-done="50"><p class="pregressDesc-para">50%</p></div>
                            <div class="progressInfo" data-done="50"><p class="pregressDesc-para">50%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="math">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-maths">Mathematics</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer maths-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-maths">
                                <div class="progressDone progressDone-maths" data-done="60"></div>
                            </div>

                            <div class="progressBar progressBar-maths">
                                <div class="progressDone progressDone-maths" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-maths">
                                <div class="progressDone progressDone-maths" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-maths">
                                <div class="progressDone progressDone-maths" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="50"><p class="pregressDesc-para">50%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="histciv">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-histciv">History & Civics</h1>
                </div>
                
                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer histciv-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-histciv">
                                <div class="progressDone progressDone-histciv" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-histciv">
                                <div class="progressDone progressDone-histciv" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-histciv">
                                <div class="progressDone progressDone-histciv" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-histciv">
                                <div class="progressDone progressDone-histciv" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="geog">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-geog">Geography</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer geog-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-geog">
                                <div class="progressDone progressDone-geog" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-geog">
                                <div class="progressDone progressDone-geog" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-geog">
                                <div class="progressDone progressDone-geog" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-geog">
                                <div class="progressDone progressDone-geog" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">90%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">90%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">90%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">90%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>

            </div>



            <div class="subjectContainer" id="comp">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-comp">Computer</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer comp-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-comp">
                                <div class="progressDone progressDone-comp" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-comp">
                                <div class="progressDone progressDone-comp" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-comp">
                                <div class="progressDone progressDone-comp" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-comp">
                                <div class="progressDone progressDone-comp" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>

            </div>



            <div class="subjectContainer" id="phy">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-phy">Physics</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer phy-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-phy">
                                <div class="progressDone progressDone-phy" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-phy">
                                <div class="progressDone progressDone-phy" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-phy">
                                <div class="progressDone progressDone-phy" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-phy">
                                <div class="progressDone progressDone-phy" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">70%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="chem">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-chem">Chemistry</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer chem-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-chem">
                                <div class="progressDone progressDone-chem" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-chem">
                                <div class="progressDone progressDone-chem" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-chem">
                                <div class="progressDone progressDone-chem" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-chem">
                                <div class="progressDone progressDone-chem" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>


            </div>

            <div class="subjectContainer" id="bio">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-bio">Biology</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer bio-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-bio">
                                <div class="progressDone progressDone-bio" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-bio">
                                <div class="progressDone progressDone-bio" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-bio">
                                <div class="progressDone progressDone-bio" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-bio">
                                <div class="progressDone progressDone-bio" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">80%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">80%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">80%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">80%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="sanskrit">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-sanskrit">Sankrit</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer sanskrit-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-sanskrit">
                                <div class="progressDone progressDone-sanskrit" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-sanskrit">
                                <div class="progressDone progressDone-sanskrit" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-sanskrit">
                                <div class="progressDone progressDone-sanskrit" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-sanskrit">
                                <div class="progressDone progressDone-sanskrit" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">85%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">85%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">85%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">85%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="artedu">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-artedu">Art & Education</h1>
                </div>


                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer artedu-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-artedu">
                                <div class="progressDone progressDone-artedu" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-artedu">
                                <div class="progressDone progressDone-artedu" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-artedu">
                                <div class="progressDone progressDone-artedu" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-artedu">
                                <div class="progressDone progressDone-artedu" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">78%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">78%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">78%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">78%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>

            <div class="subjectContainer" id="pe">
                <div class="headerContainer">
                    <h1 class="subjHeaders subjHeaders-pe">Physical Education</h1>
                </div>

                <a href="" class="infoContainer-anchors">
                    <div class="infoContainer pe-infoContainer">

                        <div class="barContainer">
                            <div class="progressBar progressBar-pe">
                                <div class="progressDone progressDone-pe" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-pe">
                                <div class="progressDone progressDone-pe" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-pe">
                                <div class="progressDone progressDone-pe" data-done="70"></div>
                            </div>

                            <div class="progressBar progressBar-pe">
                                <div class="progressDone progressDone-pe" data-done="70"></div>
                            </div>

                        </div>

                        <div class="barContainer" id="barContainer02">
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                            <div class="progressInfo" data-done="70"><p class="pregressDesc-para">60%</p></div>
                        </div>

                        <div class="barContainer" id="barContainer03">
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Test Taken<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 MCQ Solved<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Syllabus Covered<p></div>
                            <div class="progressDesc" data-done="70"><p class="pregressDesc-para">&#9679 Learning Time<p></div>
                        </div>
                    </div>
                </a>





            </div>
        </div>
    </main>
    <script src="/90DEGREE/js/navDrawer.js"></script>


    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>
    
</body>
</html>