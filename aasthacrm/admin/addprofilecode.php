<?php
include('./include/config.php');
?>

<?php

    $CatName = $_POST['CatName'];
    $action = $_POST['action'];
    $date = date("d/m/Y");
    date_default_timezone_set("asia/kolkata");
    $time = date("h:i:sa");

    $ins = "insert into category(category_name,date,time,action) values('$CatName','$date','$time','$action')";
    if(mysqli_query($conn,"$ins"))
    {
        header('location:profile.php');
        echo "data store";  
    }
    else
    {
        echo "data not store";
    } 


?>