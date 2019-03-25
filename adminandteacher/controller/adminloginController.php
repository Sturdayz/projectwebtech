<?php
    require '../dbConnecter/dbConnect.php';
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM admin WHERE username='".$user."' AND pass='".$pass."'";
        $result = mysqli_query($connect,$sql);
        $rs = mysqli_fetch_array($result);
        if($user == $rs['username'] and $pass == $rs['pass']){
            $_SESSION['user'] = $rs['username'];
            echo "<script>window.location = '../admin/adminhome.php'</script>";
        }
        else if ($user != empty($user) or $pass != empty($pass)){
            echo "<script>alert('username or password is empty.');window.location = '../login.php'</script>";
        }
        else{
            echo "<script>alert('username or password is incorrect.');window.location = '../login.php'</script>";
        }
    }
?>