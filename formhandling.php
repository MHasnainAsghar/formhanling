<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            </form>
        </div>
    </nav>











    <div class="container card card-body">
        
        <form action="formhandling.php" method="post">
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Name" name="txtname">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" min="0" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Age" name="txtage">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Address" name="txtadd">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your email" name="txtemail">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your password" name="txtpass">
                </div>
                <br><br>
                <input type="submit" class="btn btn-warning">
            </div>
        </form>
    </div>


    <?php
    error_reporting(0);
    $name = $_POST['txtname'];
    $age = $_POST['txtage'];
    $add = $_POST['txtadd'];
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];

    $conn = mysqli_connect("localhost", "root", "", "formhandling420");         //hostname username password databasename
    if (!$conn) {
        echo "connection refuse";
    }

    $query = "insert into showdata values (null,'$name',$age,'$add','$email','$pass')";
    $q = mysqli_query($conn, $query);
    if (!$q) {
        echo "query not exectired";
    } else {
        echo "query sucess";
        
    }
    header('Location:index.php');
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
Footer