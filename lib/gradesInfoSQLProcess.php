<?php
session_start();
ini_set('display_errors', 'on');
ini_set('log_errors', 1);
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ob_start();
?>
<?php require("sqlQueries.php");?>

<?php

$professorId = $coursesId = $semester = $professorName = $courseName = $year = '';



$gradesListInfo = new AdminSystem();

//echo print_r($_POST);
echo '<br/>';


    if (isset($_POST['professorName'])) {
        $temp = $_POST['professorName'];
        $data = explode('-',$temp);
        $professorId = $data[0];
        $professorName = $data[1];

    }

echo '<br/>'.$professorId.$professorName.'<br/>';

    $query = "SELECT courseName, courseNameCode, semesterName, courseYear, finalLetterGrade FROM coursetaken NATURAL JOIN semester NATURAL join course WHERE professorId='$professorId' AND finalLetterGrade<'B-' ";

    $gradesResult= $gradesListInfo->getBestGradesSemester($query,$professorName);

$gradesResult = strtr(base64_encode($gradesResult), '+/=', '-_,');

header("Location: ../gradesInfo.php?gradesResult=$gradesResult");

?>