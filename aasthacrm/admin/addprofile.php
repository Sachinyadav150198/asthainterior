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

                            <h4 class="page-title"> Add Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->



            </div><!-- container -->

            <form class="m-t-40" method="post" action="addprofilecode.php">
                <div class="form-group">
                    <h5>Category Text Input <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" class="form-control" required
                            data-validation-required-message="Enter Category Name" name="CatName" id="CatName">
                    </div>
                    <div class="form-control-feedback"><small>Add <code>required</code></small></div>
                </div>
                <div class="col-sm-4">
                        <label for=""> Action</label>
                        <select class="form-group form-control" name="action">
                            <option value="Active">Active</option>
                            <option value="Inactive">InActive</option>
                        </select>
                    </div>
                
                <div class="text-xs-right">
                    <button name="SaveCategory" class="btn btn-info">Submit</button>
                    <button  class="btn btn-inverse">Cancel</button>
                </div>
            </form>

<?php include('./include/footer.php'); ?>