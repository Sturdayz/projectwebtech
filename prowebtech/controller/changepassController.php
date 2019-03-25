<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../dbConnecter/dbConnect.php';
    $username = $_POST['username'];
    $pass = $_POST['oldpass'];
    $sql = "SELECT pass FROM admin WHERE username = " . "'" . $username . "'" . " AND pass = " . "'" . $pass ."'" ;
    $result = mysqli_query($connect,$sql);
    if ($result){
        if($record = mysqli_fetch_array($result,MYSQLI_ASSOC)){
           $newpass = $_POST['newpass'];
           $newsql = "UPDATE admin SET pass = " . "'" . $newpass ."'";
           $result = mysqli_query($connect,$newsql);
            if ($result){
                echo "<script>alert('Password has been changed.');window.location.href = '/prowebtech/admin/changepass.php';</script>";
            }
            else{
                echo "<script>alert('Cannot change pass.');window.location.href = '/prowebtech/admin/changepass.php';</script>";
            }
        }
    }
  }
?>