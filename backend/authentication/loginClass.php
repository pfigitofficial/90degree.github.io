<?php

$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB_NAME = 'INSTITUTIONS';

$instiCon = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DB_NAME);

$instiUsername = $_POST['input-classUsername'];
$instiPassword = $_POST['input-classPassword'];


$classLoginSql = "SELECT * FROM `instututeData_table` WHERE `instiUsername`='$instiUsername' AND `instiPassword`='$instiPassword'";

$classLoginResult = mysqli_query($instiCon, $classLoginSql);

$classLoginRow = mysqli_fetch_array($classLoginResult);
$classLoginCount = mysqli_num_rows($classLoginResult);


if($classLoginCount == 1){
    session_start();
    $_SESSION['instiName'] = $classLoginRow['instiName'];
    $_SESSION['instiBranch'] = $classLoginRow['instiBranch'];
    $_SESSION['instiBoard'] = $classLoginRow['instiBoard'];
    header("location: /90DEGREE/pages/classportal/classHomePage.php");
}

?>