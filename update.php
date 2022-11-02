<?php
 $conn = mysqli_connect("localhost", "root", "", "formhandling420");
 if (!$conn) {
     echo "connection refuse";
 } else {
     echo "connection established";
 }

 error_reporting(0);
$id = $_POST['id'];
$name = $_POST['txtname'];
$age = $_POST['txtage'];
$add = $_POST['txtadd'];
$email = $_POST['txtemail'];
$pass = $_POST['txtpass'];

$query = "UPDATE showdata SET id='$id',Name='$name',Age=$age,Address='$add',email='$email',passwoord='$pass' WHERE id=$id";
 $q = mysqli_query($conn,$query);

 if(!$q){
    echo "ho gaya";



 }else{
    echo "Nhi huwa";

 header('Location:index.php');
    

}



?>