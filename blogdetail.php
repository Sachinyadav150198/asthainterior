<?php include('./include/setting.php'); ?>

<?php

include("./include/config.php");

$array = explode("/", $_SERVER['REQUEST_URI']);

$MyUrl = $array[count($array) - 2];

// var_dump($MyUrl); die();



$sel = "select * from blogs where slug='" . $MyUrl . "'";

//  echo $sel; die();

$sqlsubmenu = mysqli_query($conn, "$sel");

$row = mysqli_fetch_array($sqlsubmenu);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['meta_title'] ?></title>
    <meta name="description" content="<?php echo $row['meta_description'] ?>">
    <meta name="keywords" content="<?php echo $row['meta_keyword'] ?>">


    <link rel="stylesheet" type="text/css" href="<?php echo site_Url; ?>css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_Url; ?>css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo site_Url; ?>css/style2.css">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



    <!-- caraousel css -->
    <!-- Owl Stylesheets -->

    <link rel="stylesheet" href="<?php echo site_Url; ?>assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo site_Url; ?>assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100&display=swap"
        rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Roboto:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet">
    <!-- aos link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- favicon -->

    <link type="image/x-icon" href="<?php echo site_Url; ?>images/favicon.png" rel="shortcut icon">



    <style>
    .accordion {

        background-color: #eee;

        color: #444;

        cursor: pointer;

        padding: 18px;

        width: 100%;

        border: none;

        text-align: left;

        outline: none;

        font-size: 15px;

        transition: 0.4s;

    }



    .active,

    .accordion:hover {

        background-color: #ccc;

    }



    .panel {

        padding: 0 18px;

        display: none;

        background-color: white;

        overflow: hidden;

    }





    button.accordion:after {

        content: '\002B';

        color: #777;

        font-weight: bold;

        float: right;

        margin-left: 5px;

    }



    button.accordion.active:after {

        content: "\2212";

    }
    </style>



</head>

<body>
    <?php include ('include/header.php');?>


    <div class="container mt-5 pt-5">

        <div class="row mt-5">

            <div class="col-md-12 text-center bloggs" id=" ">


                <h1> <?php echo $row['title'] ?> </h1>


            </div>
        </div>

    </div>




    <!-- cards -->

    <div class="container mt-5 mb-5">
        <div class="row">

            <?php echo $row['content']; ?>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <button class="accordion">Section 1</button>

            <div class="panel">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut

                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco

                    laboris nisi ut aliquip ex ea commodo consequat.</p>

            </div>



            <button class="accordion">Section 2</button>

            <div class="panel">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut

                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco

                    laboris nisi ut aliquip ex ea commodo consequat.</p>

            </div>



            <button class="accordion">Section 3</button>

            <div class="panel">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut

                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco

                    laboris nisi ut aliquip ex ea commodo consequat.</p>

            </div>



            <script>
            var acc = document.getElementsByClassName("accordion");

            var i;



            for (i = 0; i < acc.length; i++) {

                acc[i].addEventListener("click", function() {

                    this.classList.toggle("active");

                    var panel = this.nextElementSibling;

                    if (panel.style.display === "block") {

                        panel.style.display = "none";

                    } else {

                        panel.style.display = "block";

                    }

                });

            }
            </script>
        </div>
    </div>


    <!-- FOOTER -->
    <?php include 'footer.php';?>