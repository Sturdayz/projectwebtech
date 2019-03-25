<?php
    require '../dbConnecter/dbConnect.php';
    echo $_POST['filename'];
    $objCSV = fopen($_POST['filename'],"r");
    while (($objArr = fgetcsv($objCSV,1000,"," )) != FALSE) {
    $sql = "INSERT INTO student (id,type,name,email)
    VALUES ('$objArr[0]' , '$objArr[1]' , '$objArr[2]' , '$objArr[3]');";
    echo "$objArr[0]<br>";
    echo "$objArr[1]<br>";
    echo "$objArr[2]<br>";
    echo "$objArr[3]<br>";
        if ($connect->multi_query($sql) === TRUE) {
            echo"<script>alert('Upload success.');window.location.href = '/prowebtech/admin/addstudent.php';</script>";
        } 
        else {
            echo"<script>alert('Cannot upload.');window.location.href = '/prowebtech/admin/addstudent.php';</script>";
        }
    }
    fclose($objCSV);
    $connect->close(); 
?>