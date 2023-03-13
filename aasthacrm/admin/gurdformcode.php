<?php
include('./include/config.php');
?>

<?php

    $ins = "insert into blog(user_name,user_middle_name,user_last_name,user_father_name,user_mother_name,user_mobile,user_per_address,user_tmp_address,user_status,user_aaddhar,user_pancard,user_dob,user_img,user_pf,user_esi_number,salery,datejoin,jobtitle,user_account,user_ifsc_code,bankname,user_bank_name,ref_name,ref_id,ref_mobile,ref_relation,ref_dob,ref_gender,ref_img,police_verification,date,time,action,comment) values('$name','$midname','$lname','$fname','$mname','$mobile','$paradds','$temadds','$fnagenderme','$aaddhar','$pan','$dob','$img','$pf','$esi','$sel','$datejoin',$jobtitle,'$account','$ifsc','$bankname','$holder','$ref','$refid','$refnum','$relation','$refdob','$refgender','$refimg','$verification','$date','$time','$action','$comment')";
    if(mysqli_query($conn,"$ins"))
    {
        move_uploaded_file($img1,$location.$img);
        move_uploaded_file($refimg1,$location.$refimg);
        move_uploaded_file($verification1,$location.$verification);
        header("location:gurdprofile.php");
        echo "data store";

    }
    else
    {
        echo "data not store";
    } 



?>