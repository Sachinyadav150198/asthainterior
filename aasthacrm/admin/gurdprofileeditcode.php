<?php
include('./include/config.php');
?>

<?php
    $idd = $_POST['idd'];

    $name = $_POST['name'];
    $midname = $_POST['midname'];
    $lname = $_POST['lname'];

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $mobile = $_POST['mobile'];

    $paradds = $_POST['paradds'];
    $temadds = $_POST['temadds'];
    $fnagenderme = $_POST['gender'];

    $aaddhar = $_POST['aaddhar'];
    $pan = $_POST['pan'];
    $dob = $_POST['dob'];
    // $dob = date_format($dob1,"Y/m/d H:i:s");

    
    $img = implode('.',$_FILES['img']['name']);
    // $img = $_FILES['img']['name'];
    $img1 = $_FILES['img']['tmp_name'];

    $pf = $_POST['pf'];
    $esi = $_POST['esi'];
    $sal = $_POST['sal'];

    $datejoin = $_POST['datejoin'];
    $jobtitle = $_POST['jobtitle'];

    $account = $_POST['account'];
    $ifsc = $_POST['ifsc'];
    $bankname = $_POST['bankname'];
    $holder = $_POST['holder'];
     
    $ref = $_POST['ref'];
    $refid = $_POST['refid'];
    $refnum = $_POST['refnum'];

    $relation = $_POST['relation'];
    $refdob = $_POST['refdob'];
    $refgender = $_POST['refgender'];

    $refimg = implode(',',$_FILES['refimg']['name']);
    // $refimg = $_FILES['refimg']['name'];
    $refimg1 = $_FILES['refimg']['tmp_name'];

    $verification = implode(',',$_FILES['verification']['name']);
    // $verification = $_FILES['verification']['name'];
    $verification1 = $_FILES['verification']['tmp_name'];

    $action = $_POST['action'];

    $comment = $_POST['comment'];
    
    $date = date("d/m/Y");
    date_default_timezone_set("asia/kolkata");
    $time = date("h:i:sa");

    $location = "upload/";

    $sel = "select * from blog where id=$idd";
    $r = mysqli_query($conn,$sel);
    $res = mysqli_fetch_array($r);

    $loc  = "./upload/".$res['user_img'];
    $loc1 = "./upload/".$res['ref_img'];
    $loc2 = "./upload/".$res['police_verification'];

    $up = "update blog set user_name='$name',user_middle_name='$midname',user_last_name='$lname',user_father_name='$fname',user_mother_name='$mname',user_mobile='$mobile',user_per_address='$paradds',user_tmp_address='$temadds',user_status='$fnagenderme',user_aaddhar='$aaddhar',user_pancard='$pan',user_dob='$dob',user_img='$img',user_pf='$pf',user_esi_number='$esi',salery='$sal',datejoin='$datejoin',jobtitle='$jobtitle',user_account='$account',user_ifsc_code='$ifsc',bankname='$bankname',user_bank_name='$holder',ref_name='$ref',ref_id='$refid',ref_mobile='$refnum',ref_relation='$relation',ref_dob='$refdob',ref_gender='$refgender',ref_img='$refimg',police_verification='$verification',comment='$comment',date='$date',time='$time',action='$action' where id='$idd'";
    if(mysqli_query($conn,"$up"))
    {
        unlink($loc);
        unlink($loc1);
        unlink($loc2);
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