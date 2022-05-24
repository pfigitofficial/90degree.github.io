<?php 

include "/Applications/XAMPP/xamppfiles/htdocs/90DEGREE/backend/connection/subjectChapter_con/10_bio_chaptersCon.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/90DEGREE/css/general.css">
    <link rel="stylesheet" href="/90DEGREE/css/fonts.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentmcq-I/mcq-bio-1.css">
    <link rel="stylesheet" href="/90DEGREE/css/portalCSS/studentSubjectPage/subjectmedia.css">


    <title>Biology - STUDENT</title>
</head>

<body onload="btn1slide()">

    <header>
        <nav>
            <img src="/90DEGREE/img/menu.png" alt="" class="menuImage">
            <img src="/90DEGREE/img/90degreelogo.png" alt="" class="ownerLogoImageafter">
        </nav>
    </header>


    <main>
        <div id="container01">
            <div id="infoContainer01">
                <h1 class="descriptorHeader" id="descriptorHeader01">Biology</h1>
                <p class="descriptorPara" id="descriptorPara01">6 Chapters | 30 Journeys</p>
            </div>


            <div id="infoContainer01-image">
                <img src="/90DEGREE/img/atom.png" alt="" class="infoContainerImage">
            </div>
        </div>
        <hr>

        <div id="container02">

            <div class="tab active" id="tab01">
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

        <div id="container03">
            <h1 class="descriptorHeader descriptorHeader-Math" id="descriptorHeader02">SELECT CHAPTER</h1>

            <form action="/90DEGREE/backend/connection/testCon/testMCQ.php" method="post">
                <?php
                $i = 1;
                while($BIO_SUBJ_CHAPTER_row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="checkerDiv">
                        <h1 class="chekerDiv-headers checkerDiv-MathHeaders"><?php echo $BIO_SUBJ_CHAPTER_row['chapterName']; ?></h1>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="checkerBox0<?php echo $i ?>" id="checkerBox0<?php echo $i ?>" class="checkers" value="<?php echo $BIO_SUBJ_CHAPTER_row['chapterName'] ?>">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php
                    $i++;

                }

                ?>
                

               

                

                <button type="submit" class="formButtons" id="formBtn-math">START TEST</button>
            </form>
        </div>
        <hr>


    </main>



    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>

</body>

</html>