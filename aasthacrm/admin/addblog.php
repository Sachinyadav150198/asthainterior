<?php include('./include/config.php'); ?>
<?php include('./include/setting.php'); ?>

<?php

    if(isset($_POST['Submit']))
    {
       $name = mysqli_real_escape_string($conn,$_POST['name']);
       $url1 = mysqli_real_escape_string($conn,$_POST['url']);
	   $lower = strtolower($url1);
	   $match = '/[^A-Za-z0-9]+/';
	   $rep = '-';
	   $url = preg_replace($match,$rep,$lower);
       $pagename = mysqli_real_escape_string($conn,$_POST['pagename']);
       $pagedesc = mysqli_real_escape_string($conn,$_POST['pagedesc']);
       $pagekey = mysqli_real_escape_string($conn,$_POST['pagekey']);
       $content = mysqli_real_escape_string($conn,$_POST['content']);
       $img = mysqli_real_escape_string($conn,$_FILES['img']['name']);
       $target_dir = "upload/";
	   $target_file = $target_dir . basename($_FILES["img"]["name"]);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["img"]["size"] > 1024*500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
   // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

// Check if image file is a actual image or fake image
       $imgtype = mysqli_real_escape_string($conn,$_FILES['img']['tmp_name']);
       $active = mysqli_real_escape_string($conn,$_POST['action']);

       $loc = "upload/";
    
       $ins = "insert into blogs set
            title= '$name',
            slug = '$url',
            meta_title='$pagename',
            meta_keyword = '$pagekey',
            meta_description= '$pagedesc',
            content= '$content',
            img = '$img',
            status = '$active' ";

        if(mysqli_query($conn,$ins))
        {
            move_uploaded_file($imgtype,$loc.$img);
            header('location:blogprofile.php');
        }
        else
        {
            // echo "data not insert";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin & Dashboard Template</title>
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

                            <h4 class="page-title"> Blog Form </h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div><!-- end page title end breadcrumb -->



            </div><!-- container -->

            <form method="POST" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="col-sm-6">
                        <label for=""> Blog Title</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Blog Name">
                    </div>

                </div> <br> <br>

                <div class="form-row">
                    <div class="col-sm-6">
                        <label for=""> Blog Url</label>
                        <input type="text" class="form-control" name="url" placeholder="Enter Blog Url">
                    </div>
                    <div class="col-sm-6">
                        <label for=""> Page title</label>
                        <input type="text" class="form-control" name="pagename" placeholder="Enter Page Name">
                    </div>

                </div> <br><br>

                <div class="form-row">
                    <div class="col-sm-6">
                        <label for=""> Page Description</label>
                        <input type="text" class="form-control" name="pagedesc" placeholder="Enter Page Description">
                    </div>
                    <div class="col-sm-6">
                        <label for=""> Page Keyword</label>
                        <input type="text" class="form-control" name="pagekey" placeholder="Enter Page Keyword">
                    </div>

                </div> <br><br>

                <div class="form-row">
                    <div class="col-sm-12">
                        <label for="">Blog Content</label> <br>
                        <textarea name="content" id="about" class="form-control" cols="185" rows="10"
                            placeholder="Enter  Blog Content Here...."></textarea>
                    </div>

                </div> <br><br>

                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="">Image Upload</label>
                        <input type="file" class="form-control" name="img" multiple placeholder="">
                    </div>

                </div> <br> <br>

                <div class="form-row">

                    <div class="col-sm-4">
                        <label for=""> Action</label>
                        <select class="form-group form-control" name="action">
                            <option value="Active">Active</option>
                            <option value="InActive">InActive</option>
                        </select>
                    </div>

                </div> <br> <br>

                <div class="form-row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-3">
                        <!-- <button class="btn btn-success">Submit</button> -->
                        <input type="submit" value="Submit" name="Submit" class="form-control btn btn-success">
                    </div>
                    <div class="col-sm-5"></div>
                </div> <br> <br>

            </form>

            <?php include('./include/footer.php'); ?>