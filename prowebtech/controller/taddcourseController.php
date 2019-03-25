<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        require '../dbConnecter/dbConnect.php';
        $courseid = $_POST['courseid'];
        $coursename = $_POST['coursename'];
        $teacher = $_POST['teacher'];
        $sec = $_POST['sec'];
        $credit = $_POST['credit'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $sql = "INSERT INTO course (course_id,course_name,course_teacher,section,credit,year,semester)" . " VALUES ($courseid,'$coursename','$teacher',$sec,$credit,$year,$semester)";
        $result = mysqli_query($connect,$sql);  
        if ($result){
            echo"<script>alert('Add course success.');window.location.href = '/prowebtech/teacher/newcourse.php';</script>";
        }
        else{
            echo"<script>alert('Cannot add course.');window.location.href = '/prowebtech/teacher/newcourse.php';</script>";
        }
    }

?>