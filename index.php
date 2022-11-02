
<?php
error_reporting(0);
$name = $_POST['txtname'];
$age = $_POST['txtage'];
$add = $_POST['txtadd'];
$email = $_POST['txtemail'];
$pass = $_POST['txtpass'];

$conn = mysqli_connect("localhost", "root", "", "formhandling420");         
if (!$conn) {
echo "connection refuse";
}
else{
echo "connection established";
}
$qurey = "select * from showdata";

$q = mysqli_query($conn,$qurey);
?>




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



<table border="20px" style="width 500px">
<tr>
<th class="text-primary">id</th>
<th class="text-primary">name</th>
<th class="text-primary">address</th>
<th class="text-primary">age</th>
<th class="text-primary">email</th>
<th class="text-primary">password</th>
<th class="text-primary">action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($q)){?>
<tr class="text-info text-body">
<td class="bg-dark text-white"> <?php echo $row['id']; ?></td>
<td class="bg-dark text-white"> <?php echo $row['name']; ?></td>
<td class="bg-dark text-white"> <?php echo $row['address']; ?></td>
<td class="bg-dark text-white"> <?php echo $row['age']; ?></td>
<td class="bg-dark text-white"> <?php echo $row['email']; ?></td>
<td class="bg-dark text-white"> <?php echo $row['password']; ?></td>

<td><a class="bg-warning" href="edit.php?id=<?=$row['id']?>">Edit</a>--<a class="bg-danger text-dark" href="delete.php?id=<?=$row['id']?>">delete</a></td>

<?php } ?>
</tr>
</table>
<br>
<br>

<a class="bg-warning" href="formhandling.php"><---------------Form--------></a>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>