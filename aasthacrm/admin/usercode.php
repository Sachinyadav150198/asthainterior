<?php include('./include/config.php'); ?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($ins = mysqli_query($conn,"insert into user(user_name,user_email,password) values('$name','$email','$password')"))

   {
    echo "data insert ";
    header("location:../index.php");
   }
   else
   {
    echo "data not insert";
   }
?>