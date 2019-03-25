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
    <title>CAAS STUDENT</title>
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
            <a class="navbar-brand" href="studenthome.php" style="color:#FFFFFF;">CAAS</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="seescore.php" style="color:#FFFFFF;">Score<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="seegrade.php" style="color:#FFFFFF;">Grade<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-left:2250%;">
                    <a class="nav-link" style="color:#FFFFFF;" href="../logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
    <div style="margin: 15% 25% 25% 25%;">
        <form action="" method="POST">
            <div style="background-color:#282D3D; color:#FFFFFF; padding:1rem; border-radius:20px;">
                <div class="container">
                    <div class="col-xs-4">
                        <label>Student ID</label>
                        <input type="text" name="studentid" class="form-control" placeholder="Enter Student ID" required>
                    </div>
                </div>
                <br>
                <button  type="submit" id="submit" name="search" class="btn btn-dark" style="color:#FFFFFF; margin-left: 2%;" >Search</button>
                <br>
                <br>
                <table class="table table-striped">
                <thead>
                <tr style="color:#FFFFFF;">
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Score Midterm</th>
                    <th>Score Final</th>
                    <th></th>
                </tr>
            </div>
        </form>
    </div>
</body>
</html>