<?php
if(isset($_POST['update'])){
    require '../dbConnecter/dbConnect.php';
    try{
        $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch(PDOException $e){
        echo 'Error';
    }
    $id = $_POST['id'];
    $sql = 'SELECT * FROM test_subject WHERE `course_id`=:id';
    $stmt=$dbh->prepare($sql);
    try{
      $stmt->execute(array(":course_id"=>$id));
    }
    catch(PDOException $e){
      echo 'Error';
    }
}
?> 