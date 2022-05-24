<?php

session_start();

if(!isset($_SESSION['parentName'])){
    header("location: /90DEGREE/login-parents.php");
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
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/portal.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/portalmedia.css">

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

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><?php echo $_SESSION['parentName'] ?></a>
        <a href="/90DEGREE/backend/authentication/logout.php">Logout</a>
    </div>


    <main>
       
        <div class="container01">
            <div class="imageContainer01">
                <img src="/90DEGREE/img/boy.png" alt="profileImage" class="profile-image">
            </div>

            <div class="profileInfoContainer">
                <h1 id="userName-header">Hello</h1>
                <p id="userClass-para"><?php echo $_SESSION['studentName'] ?>'s Parents</p>
            </div>
        </div>
        <hr>



        <div class="container02">

            <div class="slider">
                <div id="sliderFrame">
                    <img src="/90DEGREE/img/1.jpg" class="newsImage" id="newsImage01">
                    <img src="/90DEGREE/img/2.jpg" class="newsImage" id="newsImage02">
                    <img src="/90DEGREE/img/3.jpg" class="newsImage" id="newsImage03">
                    <img src="/90DEGREE/img/4.jpg" class="newsImage" id="newsImage03">
                </div>


                <div class="indicators">
                    <span id="btn01" class="active"></span>
                    <span id="btn02"></span>
                    <span id="btn03"></span>
                    <span id="btn04"></span>
                </div>
            </div>

        </div>
        <hr>



        <div class="container03">
            <div class="statusTable">
            </div>
        </div>
        <hr>

        <div class="headerContainer">
            <h1 id="descriptor-header04">Syllabus Coverage and Analysis</h1>
        </div>

        <div class="container04" id="container04">

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="EnglishGradient">
                              <stop offset="0%" stop-color="orange" />
                              <stop offset="100%" stop-color="#FF5F00" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="englishCircleProgress" stroke-linecap="round" />
                    </svg>
                    <label class="subjectDesc-labels">English</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="HindiGradient">
                              <stop offset="0%" stop-color="#B20600" />
                              <stop offset="100%" stop-color="#F24A72" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="hindiCircleProgress" stroke-linecap="round"/>
                    </svg>

                    <label class="subjectDesc-labels">Hindi</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="MathsGradient">
                              <stop offset="0%" stop-color="#035397" />
                              <stop offset="100%" stop-color="blue" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="mathsCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Maths</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="HistCivGradient">
                              <stop offset="0%" stop-color="#519259" />
                              <stop offset="100%" stop-color="#3E7C17" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="histcivCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">History & Civics</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="GeogGradient">
                              <stop offset="0%" stop-color="#035397" />
                              <stop offset="100%" stop-color="#40DFEF" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="geogCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Geography</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="CompGradient">
                              <stop offset="0%" stop-color="#F10086" />
                              <stop offset="100%" stop-color="#FFBED8" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="compCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Computer</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="PhyGradient">
                              <stop offset="0%" stop-color="#FFF56D" />
                              <stop offset="100%" stop-color="#F10086" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="phyCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Physics</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="ChemGradient">
                              <stop offset="0%" stop-color="#019267" />
                              <stop offset="100%" stop-color="#B6FFCE" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="chemCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Chemistry</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="BioGradient">
                              <stop offset="0%" stop-color="#40DFEF" />
                              <stop offset="100%" stop-color="#035397" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="bioCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Biology</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="SanskritGradient">
                              <stop offset="0%" stop-color="#EBD671" />
                              <stop offset="100%" stop-color="#FFB72B" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="sanskritCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Sanskrit</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="ArtEduGradient">
                              <stop offset="0%" stop-color="#ED5EDD" />
                              <stop offset="100%" stop-color="#573391" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="arteduCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Art Education</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                        <defs>
                           <linearGradient id="PeGradient">
                              <stop offset="0%" stop-color="#93FFD8" />
                              <stop offset="100%" stop-color="#40DFEF" />
                           </linearGradient>
                        </defs>
                        <circle cx="100" cy="100" r="87" id="peCircleProgress" stroke-linecap="round"/>
                    </svg>
                    <label class="subjectDesc-labels">Physical Education</label>
                </div>
            </a>

        </div>

        <hr>


        <!-- <script src="/90DEGREE/js/imgslider.js"></script> -->

        <div class="container06">

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/attendance.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Attendance & Punctuality</label>
                </div>
            </a>
            
            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/remarks.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Teacher's Remarks</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/review.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Parents' Review</label>
                </div>
            </a>

        </div>

        <hr>

        <div class="container08">
            <div class="information-container">
                <div class="imageContainer">
                    <img src="/90DEGREE/img/location.jpg" alt="" class="information-image">
                </div>
                <div class="infoContainer">
                    <h1 id="descriptor-header03">MILIND'S ACADEMY</h1>
                    <p id="descriptor-para">Lodha Heaven, Nilje<br>+91 0000000000<br>Maharashtra, 421204</p>
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