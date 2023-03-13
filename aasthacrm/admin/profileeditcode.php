<?php
include('./include/config.php');
?>

<?php
    $idd = $_POST['id'];
    $name = $_POST['CatName'];
    $action = $_POST['action'];

    $date = date("d/m/Y");
    date_default_timezone_set("asia/kolkata");
    $time = date("h:i:sa");



    $up = "update category set category_name='$name',date='$date',time='$time',action='$action' where id='$idd'";
    if(mysqli_query($conn,"$up"))
    {
        header("location:profile.php");
        echo "data store";  
    }
    else
    {
        echo "data not store";
    } 


?>