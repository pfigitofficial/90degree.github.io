<?php

session_start();

if(!isset($_SESSION['instiName'])){
    header("location: /90DEGREE/login-class.php");
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


    <title>CLASS - STUDENT</title>
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
        <a href="#">About</a>
        <a href="/90DEGREE/backend/authentication/logout.php">Logout</a>
    </div>


    <main>
       
        <div class="container01">
            <div class="imageContainer01">
                <img src="/90DEGREE/img/boy.png" alt="profileImage" class="profile-image">
            </div>

            <div class="profileInfoContainer">
                <h1 id="userName-header">Hello</h1>
                <p id="userClass-para"><?php echo $_SESSION['instiName'] ?></p>
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

        <div class="headerContainer">
            <h1 id="descriptor-header01">SUBJECTS</h1>
        </div>

        <div class="container04">

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container01">
                        <img src="/90DEGREE/img/abc.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">English</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container02">
                        <img src="/90DEGREE/img/hindi.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Hindi</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container03">
                        <img src="/90DEGREE/img/compass.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Maths</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container04">
                        <img src="/90DEGREE/img/monument.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">History & Civics</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container05">
                        <img src="/90DEGREE/img/globe.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Geography</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container06">
                        <img src="/90DEGREE/img/desktop.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Computer</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container07">
                        <img src="/90DEGREE/img/atom.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Physics</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container08">
                        <img src="/90DEGREE/img/chemistry.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Chemistry</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container09">
                        <img src="/90DEGREE/img/laboratory.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Biology</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container10">
                        <img src="/90DEGREE/img/sanskrit.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Sanskrit</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container11">
                        <img src="/90DEGREE/img/art.png" alt="subjectImage" class="subjectCover-image">
                    </div>
                    <label class="subjectDesc-labels">Art Education</label>
                </div>
            </a>

            <a href="#" class="subject-anchors">
                <div class="subjectCards" id="subjectCard01">
                    <div class="subjectImage-container" id="subjectImage-container12">
                        <img src="/90DEGREE/img/exercise.png" alt="subjectImage" class="subjectCover-image">
                    </div>
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
                        <img src="/90DEGREE/img/videos.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Videos & Live Lectures</label>
                </div>
            </a>
            
            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/activity.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Activity Box</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/review.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Reviews</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/encyclopedia.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Encyclopedia</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/exam.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Conduct Exams</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/calendar.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Calendar</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/attendance.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Take Attendance</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/assesment.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Assessment</label>
                </div>
            </a>

            <a href="" class="activity-anchors">
                <div class="activityCards">
                    <div class="activityImage-container">
                        <img src="/90DEGREE/img/fees.jpg" alt="activityImage" class="activity-image">
                    </div>
                    <label class="activityImage-labels">Fees and Payment</label>
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
                    <h1 id="descriptor-header03"><?php echo $_SESSION['instiName'] ?></h1>
                    <p id="descriptor-para"><?php echo $_SESSION['instiBranch'] ?><br>+91 0000000000<br>Maharashtra, 421204</p>
                </div>
            </div>
        </div>

        <hr>


        <div class="headerContainer">
            <h1 id="descriptor-header04">Follow us on...</h1>
        </div>

        <div class="container09">
            <a href="" class="profileCard-anchors">
                <div class="profileCard">
                    <img src="/90DEGREE/img/facebook.png" alt="profileImge" class="profileCard-image">
                </div>
            </a>

            <a href="" class="profileCard-anchors">
                <div class="profileCard">
                    <img src="/90DEGREE/img/linkedin.png" alt="profileImge" class="profileCard-image">
                </div>
            </a>

            <a href="" class="profileCard-anchors">
                <div class="profileCard">
                    <img src="/90DEGREE/img/instagram.png" alt="profileImge" class="profileCard-image">
                </div>
            </a>

        </div>
    </main>


    <script src="/90DEGREE/js/navDrawer.js"></script>



    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>
    
</body>
</html>