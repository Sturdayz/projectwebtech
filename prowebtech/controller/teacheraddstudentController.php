<?php
    require '../dbConnecter/dbConnect.php';
    echo $_POST['filename'];
    $objCSV = fopen($_POST['filename'],"r");
    while (($objArr = fgetcsv($objCSV,1000,"," )) != FALSE) {
    $sql = "INSERT INTO test_subject (course_id,course_name,teacher,student_id,student_name)
    VALUES ('$objArr[0]' , '$objArr[1]' , '$objArr[2]' , '$objArr[3]' , '$objArr[4]');";
    echo "$objArr[0]<br>";
    echo "$objArr[1]<br>";
    echo "$objArr[2]<br>";
    echo "$objArr[3]<br>";
    echo "$objArr[4]<br>";
        if ($connect->multi_query($sql) === TRUE) {
            echo"<script>alert('Upload success.');window.location.href = '/prowebtech/teacher/teacheraddstudent.php';</script>";
        } 
        else {
            echo"<script>alert('Cannot upload.');window.location.href = '/prowebtech/teacher/teacheraddstudent.php';</script>";
        }
    }
    fclose($objCSV);
    $connect->close(); 
?>