<?php 
    require '../dbConnecter/dbConnect.php';
    $student_id  = $_GET["student_id"];
    $sql = 'SELECT * FROM test_subject WHERE `id`= '.$student_id;
    $result = mysqli_query($connect,$sql);
    $record;
    if ($result){
        if($record =  mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $id = $record['student_id'];
            $name = $record['student_name'];
            $mid = $record['score_mid'];
            $final = $record['score_final'];
            $grade = $record['grade'];    
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CAAS TEACHER</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Marvel');
body {
    font-family: 'Marvel', sans-serif;
}
</style>
<body style="background-color:#A6A6A6;">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#282D3D; color:#FFFFFF;">
            <ul class="nav justify-content-center">
            <a class="navbar-brand" href="teacherhome.php" style="color:#FFFFFF;">CAAS</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;">Student Management</a>
                    <div class="dropdown-menu" style="color:#FFFFFF;">
                        <a class="dropdown-item" href="behavior.php">Behavior Management</a>
                        <a class="dropdown-item" href="score.php">Score Management</a>
                        <a class="dropdown-item" href="teacheraddstudent.php">Add Student</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style="color:#FFFFFF;">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;">Subject Management</a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="newcourse.php">Create New Course</a>
                    </div>
                </li>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-left: 1800%">
                        <a class="nav-link" style="color:#FFFFFF;" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </ul>
        </nav>
    </div>
    <div style="margin: 15% 25% 5% 25%;">
        <form action="" method="POST">
            <div style="background-color:#282D3D; color:#FFFFFF; padding:1rem; border-radius:20px;">
            <div class="container">
                    <div class="col-xs-4">
                        <label>Student ID</label>
                        <input type="text" name="id" value ="<?php echo $id;?>" class="form-control" >
                    </div>
            </div>
            <br>
            <div class="container">
                    <div class="col-xs-4">
                        <label>Student Name</label>
                        <input type="text" name="name" value ="<?php echo $name;?>" class="form-control" >
                    </div>
            </div>
            <br>
            <div class="container">
                    <div class="col-xs-4">
                        <label>Old Score Midterm</label>
                        <input type="text" name="oldscoremid" value ="<?php echo $mid;?>" class="form-control" >
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>Old Score Final</label>
                        <input type="text" name="oldscorefinal" value ="<?php echo $final;?>" class="form-control" >
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>Old Grade</label>
                        <input type="text" name="oldgrade" value ="<?php echo $grade;?>" class="form-control" >
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
    <div style="margin: 15% 25% 25% 25%;">
        <form action="editscore.php?student_id=<?php echo $student_id?>" method="POST">
            <div style="background-color:#282D3D; color:#FFFFFF; padding:1rem; border-radius:20px;">
                <div class="container">
                    <div class="col-xs-4">
                        <label>Edit Score Midterm</label>
                        <input type="text" name="scoremid" class="form-control" placeholder="Enter Score Midterm" required>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>Edit Score Final</label>
                        <input type="text" name="scorefinal" class="form-control" placeholder="Enter Score Final" required>
                    </div>
                </div>
                <br>
                <button  type="submit" id="submit" name="update"class="btn btn-dark" style="color:#FFFFFF; margin-left: 2%;" >Update</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['update'])){
        $sql = 'UPDATE `test_subject` SET `score_mid`="'.$_POST['scoremid'].'",`score_final`="'.$_POST['scorefinal'].'" WHERE `id` ='. $_GET["student_id"];
        $result = mysqli_query($connect,$sql);
        // if ($result){
        if($record =  mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo"<script>alert('Update success.');window.location.href = '/prowebtech/teacher/editscore.php';</script>";
        }

    }

?>