<?php


$server = "localhost";
$username = "root";
$password = "";
$dbname = "90degree_studentData";

$con = mysqli_connect($server, $username, $password, $dbname);



$fullname = $_POST['input-registerFullName'];
$phone = $_POST['input-registerPhoneNumber'];
$email = $_POST['input-registerEmailAddress'];
$dob = $_POST['input-registerDob'];
$classStd = $_POST['input-registerClass'];
$gender = $_POST['input-registerGender'];
$board = $_POST['input-registerBoardName'];
$parentName = $_POST['input-registerParentName'];
$parentPhone = $_POST['input-registerParentPhone'];
$pass = $_POST['input-registerPassword'];


$sql = "INSERT INTO `studentData_table`(`stud_fullname`, `stud_phone`, `stud_email`, `stud_dob`, `stud_gender`, `stud_class`, `stud_board`, `stud_parentName`, `stud_parentPhone`, `stud_password`) VALUES ('$fullname','$phone','$email','$dob','$gender','$classStd','$board','$parentName','$parentPhone','$pass')";


mysqli_query($con, $sql);


session_start();
$_SESSION['fullName'] = $fullname;
$_SESSION['username'] = $email;


header('Location: /90DEGREE/pages/studentPortal/studentHomePage.php');






?>