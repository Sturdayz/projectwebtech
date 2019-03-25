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
    <title>CAAS</title>
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
            <a class="navbar-brand" href="login.php" style="color:#FFFFFF;">CAAS</a>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User Management</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="addteacher.php">Add Teacher</a>
                        <a class="dropdown-item" href="addstudent.php">Add Student</a>
                        <a class="dropdown-item" href="changepass.php">Change Password</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Subject Management</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="addcourse.php">Add Subject</a>
                    </div>
                </li> -->
            </ul>
        </nav>
    </div>
    <div style="margin: 15% 25% 25% 25%;">
        <form action="controller/adminloginController.php" method="POST">
        <div style="background-color:#282D3D; color:#FFFFFF; padding:1rem; border-radius:20px;">
            <div class="col-xs-3">
                <label for="exampleInputEmail1">Username</label>
                <input name="user" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="textHelp" placeholder="Enter username" requires>
               
                <!-- <small id="textHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <br>
            <div class="col-xs-3" >
                <label for="exampleInputPassword1">Password</label>
                <input name= "pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" requires>
            </div>
            <br>
        </form>
            <button type="submit" id="submit" class="btn btn-dark" style="color:#FFFFFF; margin-left:35%;">Login</button>
            <a id="submit" class="btn btn-danger" style="color:#FFFFFF; margin-left:50% 10%;">Google Login</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>