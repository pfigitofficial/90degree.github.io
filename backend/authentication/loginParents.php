<?php

$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB_NAME = '90degree_studentData';

$parentCon = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DB_NAME);

$parentMobile = $_POST['input-parentUsername'];
$parentPassword = $_POST['input-parentPassword'];


$parentSelectSql = "SELECT * FROM `studentData_table` WHERE `stud_parentPhone`='$parentMobile' AND `stud_password`='$parentPassword'";


$result = mysqli_query($parentCon, $parentSelectSql);

$row = mysqli_fetch_array($result);

$count = mysqli_num_rows($result);

if($count == 1){
    session_start();
    $_SESSION['parentName'] = $row['stud_parentName'];
    $_SESSION['studentName'] = $row["stud_fullname"];
    $_SESSION['class'] = $row['stud_class'];
    $_SESSION['board'] = $row['stud_board'];
    header("location: /90DEGREE/pages/parentsPortal/parentsHomePage.php");
}


?>