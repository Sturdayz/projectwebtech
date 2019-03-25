<?php
    require '../dbConnecter/dbConnect.php';
    if(isset($_POST['confirm'])){
        $main = $_POST['maincourseid'];
        $pre = $_POST['precourseid'];
        if($main == $pre){
            echo"<script>alert('Cannot add prerequisite.');window.location.href = '/prowebtech/admin/addprerequisite.php';</script>";
        }
        elseif($main != $pre){
            $sql = "INSERT INTO prerequisite (main_id,pre_id)" . " VALUES ('$main','$pre')";
            $result = mysqli_query($connect,$sql);
            echo"<script>alert('Add Prerequisite success.');window.location.href = '/prowebtech/admin/addprerequisite.php';</script>";
        }
    }
?> 