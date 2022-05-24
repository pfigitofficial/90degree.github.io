<?php

$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB_NAME = 'INSTITUTIONS';

$TCHR_CON = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DB_NAME);


$TCHR_USERNAME = $_POST['input-teacherUsername'];
$TCHR_PASSWORD = $_POST['input-teacherPassword'];


$TCHR_SQL = "SELECT * FROM `instituteTeachers_table` WHERE `instiTeacherUsername`='$TCHR_USERNAME' AND `instiTeacherPassword`='$TCHR_PASSWORD'";

$TCHR_RESULT = mysqli_query($TCHR_CON, $TCHR_SQL);

$TCHR_ROW = mysqli_fetch_array($TCHR_RESULT);
$TCHR_COUNT = mysqli_num_rows($TCHR_RESULT);



if($TCHR_COUNT == 1){
    session_start();
    $_SESSION['TCHR_NAME'] = $TCHR_ROW['instiTeacherName'];
    $_SESSION['TCHR_INSTI_CODE'] = $TCHR_ROW['instiCode'];
    $_SESSION['TCHR_USERNAME'] = $TCHR_USERNAME;
    header("location:/90DEGREE/pages/teacherPortal/teacherHomePage.php");
}
else{
    session_start();
    $_SESSION['TCHR_CREDENTIALS_ERROR'] = "Invalid Credentials";
    header("location:/90DEGREE/login-teacher.php");
}


?>