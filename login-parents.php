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


    <title>LOGIN - TEACHER</title>
</head>
<body>

    <header>
        <nav>
            <img src="/90DEGREE/img/90degreelogo.png" alt="" class="ownerLogoImage">
        </nav>
    </header>


    <main>
        <form action="/90DEGREE/backend/authentication/loginParents.php" method="post" class="login-form">

            <img src="/90DEGREE/img/atom.png" alt="pencilImage" class="imgHolder">

            <label class="descriptor-label01">LOGIN</label>
            <label class="descriptor-label02">PARENT</label>

            <input type="text" name="input-parentUsername" id="input-parentUsername" class="inputFields" placeholder="Enter your phone number">


            <input type="password" name="input-parentPassword" id="input-parentPassword" class="inputFields" placeholder="Enter your password">

            <a href="#" class="LoginPage-anchor">Forgot Password?</a>

            <button type="submit" class="inputButtons">LOGIN</button>


        </form>
    </main>

    <footer>
        <p class="footer-para">&copy; 2022 90 DEGREE</p>
    </footer>
    
</body>
</html>