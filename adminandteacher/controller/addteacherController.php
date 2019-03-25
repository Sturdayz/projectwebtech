<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        require '../dbConnecter/dbConnect.php';
        $type = "1";
        $name = $_POST['name'];
        $faculty = $_POST['faculty'];
        $department = $_POST['department'];
        $email= $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "INSERT INTO teacher (type,name,faculty,department,email,pass)" . " VALUES ('$type','$name','$faculty','$department','$email','$pass')";
        $result = mysqli_query($connect,$sql);  
        if ($result){
            echo"<script>alert('Add data success.');window.location.href = '/prowebtech/admin/addteacher.php';</script>";
        }
        else{
            echo"<script>alert('Cannot add data.');window.location.href = '/prowebtech/admin/addteacher.php';</script>";
        }
    }

?>