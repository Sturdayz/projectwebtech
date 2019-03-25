<?php
    session_start();
    require '../dbConnecter/dbConnect.php';
    try{
        $dbh = new PDO("mysql:host=$hostName;dbname=$dbName", $user, $pass);
    }
    catch(PDOException $e){
        echo 'Error';
    }
    $sql = 'SELECT course_id,course_name FROM course';
    $result = mysqli_query($connect,$sql);  
?>
<?php
if(isset($_POST['search'])){
    try{
        $dbh = new PDO("mysql:host=$hostName;dbname=$dbName", $user, $pass);
    }
    catch(PDOException $e){
        echo 'Error';
    }
    $courseid = $_POST['courseid'];
    $sql = 'SELECT * FROM test_subject WHERE `course_id`=:courseid';
    $stmt=$dbh->prepare($sql);
    try{
      $stmt->execute(array(":courseid"=>$courseid));
    }
    catch(PDOException $e){

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
    <div style="margin: 15% 25% 25% 25%;">
        <form action="score.php" method="POST">
            <div style="background-color:#282D3D; color:#FFFFFF; padding:1rem; border-radius:20px;">
            <table class="table table-striped">
                <thead>
                <tr align="center" style="color:#FFFFFF;" >
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th></th>
                </tr>
                </thead>
                    <tbody align="center" style="color:#FFFFFF;">
                    <?php 
                        while($row = mysqli_fetch_array($result)){
                    echo '
                    <tr>
                        <td>'.$row["course_id"].'</td>
                        <td>'.$row["course_name"].'</td>
                    </tr>
                    ';
                        }  
                    ?>
                    </tbody> 
                </table>
                <br>
                <div class="container">
                    <div class="col-xs-4">
                        <label>Course ID</label>
                        <input type="text" name="courseid" class="form-control" placeholder="Enter Course ID" required>
                    </div>
                </div>
                <br>
                <button  type="submit" id="submit" name="search" class="btn btn-dark" style="color:#FFFFFF; margin-left: 2%;" >Search</button>
                <br>
                <br>
                <table class="table table-striped">
                <thead>
                <tr style="color:#FFFFFF;">
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Score Midterm</th>
                    <th>Score Final</th>
                    <th>Grade</th>
                    <th></th>
                </tr>
                </thead>
                    <tbody style="color:#FFFFFF;">
                    <?php 
                        if(isset($_POST['search'])){
                            while($row =$stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <th style="color:#FFFFFF;"><?php echo $row['student_id']; ?></th>
                            <th style="color:#FFFFFF;"><?php echo $row['student_name']; ?></th>
                            <th style="color:#FFFFFF;"><?php echo $row['score_mid']; ?></th>
                            <th style="color:#FFFFFF;"><?php echo $row['score_final']; ?></th>
                            <th style="color:#FFFFFF;"><?php echo $row['grade']; ?></th>
                            <th style="color:#FFFFFF;"><a href="editscore.php?student_id=<?php echo $row["id"]?>">Edit</a></th>
                    </tbody>
                    <?php }} ?>
                </table>
            </div>
        </form>
    </div>
</body>
</html>