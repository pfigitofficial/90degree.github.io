<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: /90DEGREE/login-student.html");
}

if($_SESSION['class'] == 10){require "/Applications/XAMPP/xamppfiles/htdocs/90DEGREE/backend/connection/std_sub_con/10_bio.php";}
elseif ($_SESSION['class'] == 8) {require "/Applications/XAMPP/xamppfiles/htdocs/90DEGREE/backend/connection/std_sub_con/08_bio.php";}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/90DEGREE/css/general.css">
    <link rel="stylesheet" href="/90DEGREE/css/fonts.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentmcq/mcq.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentmcq/mcq-bio.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentmcq/mcqmedia.css">

    <link rel="stylesheet" href="/90DEGREE/css/navDrawer/navDrawer.css">


    <title>Biology - MCQ</title>
</head>

<body>

    <header>
        <nav>
            <img src="/90DEGREE/img/menu.png" alt="" class="menuImage" onclick="openNav()">
            <img src="/90DEGREE/img/90degreelogo.png" alt="" class="ownerLogoImageafter">
        </nav>
    </header>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><?php echo $_SESSION['fullName']; ?></a>
        <a href="#"><?php echo $_SESSION['class']; ?></a>
        <a href="/90DEGREE/backend/authentication/logout.php">Logout</a>
    </div>

    <main>
        <div class="infoImageContainer">
            <img src="/90DEGREE/img/laboratory.png" alt="microscopeImage" class="infoImage">
        </div>

        <div id="container01">
            <div id="infoContainer01">
                <h1 class="descriptorHeader" id="descriptorHeader01">Biology</h1>
                <p class="descriptorPara" id="descriptorPara01">MCQ LEVEL 01</p>
            </div>
        </div>
        <hr>

        <div id="container02">
            <?php

            $num_of_rows = mysqli_num_rows($result);
            $h = 1;
            while ($h <= $num_of_rows) {
            ?>
                <div class="tab active" id="tab0<?php echo $h ?>" onclick="question0<?php echo $h ?>Slide()">
                    <p class="descriptorPara" id="descriptorPara02"><?php echo $h ?></p>
                </div>
            <?php
                $h++;
            }
            ?>

        </div>
        <hr>

        <div class="timerContainer">
            <h1 class="timerContainerHeader" id="timer">30:00</h1>
        </div>


        <form action="#" method="post" class="questionForm">
            <div class="container03">
                <div class="testContainer" id="testContainer-box">

                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)){

                    ?>
                        <div class="testBox" id="testBox0<?php echo $i ?>">
                            <h1 class="questionHeaders"><?php echo $row['mcqQuestion'] ?></h1>

                            <div class="optionBox">
                                <label class="custom-radioBtn">
                                    <input type="radio" name="optionRadio0<?php echo $i ?>" id="optionRadio0<?php echo $i ?>" value="A" class="inputCheckers">
                                    <span class="checkMark"></span>
                                </label>
                                <p class="optionDescriptor-para"><?php echo $row['mcqOption01'] ?></p>
                            </div>

                            <div class="optionBox">
                                <label class="custom-radioBtn">
                                    <input type="radio" name="optionRadio0<?php echo $i ?>" id="optionRadio0<?php echo $i ?>" value="A" class="inputCheckers">
                                    <span class="checkMark"></span>
                                </label>
                                <p class="optionDescriptor-para"><?php echo $row['mcqOption02'] ?></p>
                            </div>

                            <div class="optionBox">
                                <label class="custom-radioBtn">
                                    <input type="radio" name="optionRadio0<?php echo $i ?>" id="optionRadio0<?php echo $i ?>" value="A" class="inputCheckers">
                                    <span class="checkMark"></span>
                                </label>
                                <p class="optionDescriptor-para"><?php echo $row['mcqOption03'] ?></p>
                            </div>

                            <div class="optionBox">
                                <label class="custom-radioBtn">
                                    <input type="radio" name="optionRadio0<?php echo $i ?>" id="optionRadio0<?php echo $i ?>" value="A" class="inputCheckers">
                                    <span class="checkMark"></span>
                                </label>
                                <p class="optionDescriptor-para"><?php echo $row['mcqOption04'] ?></p>
                            </div>

                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>


            <div class="buttonContainer">
                <button type="submit" class="submitBtn">END TEST</button>
            </div>
        </form>

    </main>
    <script src="/90DEGREE/js/navDrawer.js"></script>
    <script src="/90DEGREE/js/testBoxSlider.js"></script>
    <!-- <script src="/90DEGREE/js/timer.js"></script> -->


    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>

</body>

</html>