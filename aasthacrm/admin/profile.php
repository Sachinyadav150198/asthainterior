<?php include('./include/config.php'); ?>
<?php include('./include/setting.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>URVYA Security - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include('./include/header.php'); ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?php include('./include/head.php'); ?>
    <!-- Left Sidenav -->
   <?php include('./include/sidemenu.php'); ?>
   
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <h4 class="page-title"> Show Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->



            </div><!-- container -->

            <button class="btn btn-success"> <a href="<?php echo site_Url; ?>admin/addprofile.php" style="color:white">Add Profile</a> </button>

            <table  class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                $sel = "select * from category ORDER BY id";
                $sel_q = mysqli_query($conn,$sel);
                while($sel_res = mysqli_fetch_array($sel_q,MYSQLI_BOTH))
               
                {
                ?>
                <tr>
                    <td><?php echo $sel_res['id']; ?></td>
                    <td><?php echo $sel_res['category_name']; ?></td>
                    <td><?php echo $sel_res['date']; ?></td>
                    <td><?php echo $sel_res['time']; ?></td>
                    <td><?php echo $sel_res['action']; ?></td>
                    <td><a href="profileedit.php?id=<?php echo $sel_res['id']; ?>" class="ti-pencil-alt btn btn-success"></a></td>
                </tr>
                <?php
                }
                ?>
            </table>
<?php include('./include/footer.php'); ?>