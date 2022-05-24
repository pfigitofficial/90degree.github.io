<?php

$subjectChecks = $_POST;


foreach ($subjectChecks as $subjectChecks){
    $concatQuery .= "`mcqChapter`=" . "'" . $subjectChecks . "'" . " OR ";
}

$finalConcatQuery = $concatQuery . "`mcqChapter`=''" . " ORDER BY rand() LIMIT 10";

echo $finalConcatQuery;


session_start();
$_SESSION['mcqNumberQuery'] = $finalConcatQuery;

header("location: /90DEGREE/pages/studentPortal/studentMCQ/mcq-bio.php");

?>