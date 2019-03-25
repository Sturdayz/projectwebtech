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
    <title>CAAS ADMIN</title>
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
            <a class="navbar-brand" href="adminhome.php" style="color:#FFFFFF;">CAAS</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;">User Management</a>
                    <div class="dropdown-menu" style="color:#FFFFFF;">
                        <a class="dropdown-item" href="addteacher.php">Add Teacher</a>
                        <a class="dropdown-item" href="addstudent.php">Add Student</a>
                        <a class="dropdown-item" href="changepass.php">Change Password</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style="color:#FFFFFF;">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;">Subject Management</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="addcourse.php">Add Subject</a>
                        <a class="dropdown-item" href="addprerequisite.php">Add Prerequisite</a>
                    </div>
                </li>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-left: 1850%">
                        <a class="nav-link" style="color:#FFFFFF;" href="../login.php">Logout</a>
                    </li>
                </ul>
            </ul>
        </nav>
    </div>
    <div style="margin: 15% 25% 25% 25%;">
        <form action="" method="POST">
            <div style="background-color:#282D3D; color:#FFFFFF; padding:1rem; border-radius:20px;">
            <div class="container">
                <div class="col-xs-4">
                    <label>Teacher ID</label>
                    <input type="text" name="teacherid" class="form-control" placeholder="Enter Teacher ID" required>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="col-xs-4">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="col-xs-4">
                    <label>Faculty</label>
                    <input type="text" name="faculty" class="form-control" placeholder="Enter Faculty" required>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="col-xs-4">
                    <label>Department</label>
                    <input type="text" name="department" class="form-control" placeholder="Enter Department" required> 
                </div>
            </div>
            <br>
            <div class="container">
                <div class="col-xs-4">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="col-xs-4">
                    <label>Password</label>
                    <input type="text" name="pass" class="form-control" placeholder="Enter Password" required>
                </div>
            </div>
            <br>
            <button  type="submit" id="submit" class="btn btn-dark" style="color:#FFFFFF; margin-left: 2%;" >Create</button>
            </div>
        </form>
    </div>
</body>
</html>