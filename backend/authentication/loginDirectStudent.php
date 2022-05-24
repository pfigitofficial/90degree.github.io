<?php

$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DIRECT_STUD_DB_NAME = "90degree_studentData";

$directStudentCon = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DIRECT_STUD_DB_NAME);


$stud_userName = $_POST['input-studentUsername'];
$stud_password = $_POST['input-studentPassword'];


$directStudSQL = "SELECT * FROM `studentData_table` WHERE `stud_email`='$stud_userName' AND `stud_password`='$stud_password'";
$directStudResult = mysqli_query($directStudentCon, $directStudSQL);
$directStudRow = mysqli_fetch_array($directStudResult);
$directStudCount = mysqli_num_rows($directStudResult);



if($directStudCount == 1){
    session_start();
    $_SESSION['username'] = $stud_userName;
    $_SESSION['fullName'] = $directStudRow["stud_fullname"];
    $_SESSION['class'] = $directStudRow['stud_class'];
    $_SESSION['board'] = $directStudRow['stud_board'];
    $_SESSION['instituteCode'] = $directStudRow['stud_instiCode'];
    echo $_SESSION['instituteCode'];
    header("location: /90DEGREE/pages/studentPortal/studentHomePage.php");
}
else{
    session_start();
    $_SESSION['errormessage'] = "Invalid Credentials!";
    header("location: /90DEGREE/login-student.php");

}


?>