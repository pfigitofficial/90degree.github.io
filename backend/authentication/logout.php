<?php

session_start();


if($_SESSION['parentName']){
    session_destroy();
    header("location: /90DEGREE/login-parents.php");
}

elseif ($_SESSION['instiName']) {
    session_destroy();
    header("location: /90DEGREE/login-class.php");
}

elseif ($_SESSION['TCHR_NAME']) {
    session_destroy();
    header("location: /90DEGREE/login-teacher.php");
}

elseif ($_SESSION['checkerName']) {
    session_destroy();
    header("location: /90DEGREE/login-checker.php");
}
else{

    session_destroy();
    header("location: /90DEGREE/login-student.php");

}

?>