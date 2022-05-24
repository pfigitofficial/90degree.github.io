<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/90DEGREE/css/general.css">
    <link rel="stylesheet" href="/90DEGREE/css/fonts.css">
    <link rel="stylesheet" href="/90DEGREE/css/loginPageCSS/loginPage.css">
    <link rel="stylesheet" href="/90DEGREE/css/loginPageCSS/loginPagemedia.css">


    <title>LOGIN - CHECKER</title>
</head>
<body>

    <header>
        <nav>
            <img src="/90DEGREE/img/90degreelogo.png" alt="" class="ownerLogoImage">
        </nav>
    </header>


    <main>
        <form action="#" method="post" class="login-form">

            <img src="/90DEGREE/img/checker.png" alt="checkerImage" class="imgHolder">

            <label class="descriptor-label01">LOGIN</label>
            <label class="descriptor-label02">CHECKER</label>

            <input type="text" name="input-checkerUsername" id="input-checkerUsername" class="inputFields" placeholder="USERNAME">


            <input type="password" name="input-checkerPassword" id="input-checkerPassword" class="inputFields" placeholder="PASSWORD">

            <a href="#" class="LoginPage-anchor">Forgot Password?</a>

            <button type="submit" class="inputButtons">LOGIN</button>

        </form>

        <div class="selections-container">

            <a href="/90DEGREE/login-student.php" class="loginPage-anchors">
                <div class="card">
                    <img src="/90DEGREE/img/student.png" alt="student image" class="cardImages">
                    <label class="cardLabels">Login as a Student</label>
                </div>
            </a>

            <a href="/90DEGREE/login-teacher.php" class="loginPage-anchors">
                <div class="card">
                    <img src="/90DEGREE/img/teacher.png" alt="student image" class="cardImages">
                    <label class="cardLabels">Login as a Teacher</label>
                </div>
            </a>

            <a href="/90DEGREE/login-checker.php" class="loginPage-anchors">
                <div class="card">
                    <img src="/90DEGREE/img/checker.png" alt="checkerimage" class="cardImages">
                    <label class="cardLabels">Login as a Checker</label>
                </div>
            </a>

        </div>
    </main>

    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>
    
</body>
</html>