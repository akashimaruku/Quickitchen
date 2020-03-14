<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Details
    </title>
    <!-- MDB icon -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
    body {
        font-family: Avenirbook;
    }

    @font-face {
        src: url(fonts/AvenirLTStd-Book.otf);
        font-family: Avenirbook;
    }

    .dark-blue-text {
        color: #434343;

    }

    .subimg {
        background-color: #434343;
        width: 85px;
        height: 120px;
        margin-bottom: 17px;
        margin-left: 10px;

    }

    #myform {
        padding: 5px;
        margin: 2%;
    }

    .qty {
        width: 40px;
        height: 25px;
        text-align: center;
    }

    input.qtyplus {
        width: 25px;
        height: 25px;
    }

    input.qtyminus {
        width: 25px;
        height: 25px;
    }

    .btnaddcart {
        background-color: white;
        width: 20px;
        height: 15px;
        color: #434343;
        border: 1px solid #434343;
        font-size: 1rem;
        font-weight: bold;
        padding: 3px 15px 3px 15px;
    }

    .btnbuynow {
        background-color: #0d47a1;
        width: 20px;
        height: 15px;
        color: white;
        border: 1px solid #434343;
        font-size: 1rem;
        font-weight: bold;
        padding: 3px 15px 3px 15px;
    }
    </style>
</head>

<body>


    <!--Header-->

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#f1f1f1;">

        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="index.php">
                <img src="images/qk logo.png" width="240" height="55"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="dark-blue-text"> <i class="fas fa-bars fa-1x"></i></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse " id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color:#434343; font-weight:bold;">HOME
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product1.php" style="color:#434343; font-weight:bold;">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php" style="color:#434343; font-weight:bold;">ABOUT US</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php" style="color:#434343; font-weight:bold;">CONTACT
                            US</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color:#434343; font-weight:bold;">MY
                            ACCOUNT</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="login.php" style="color:#434343; font-weight:bold;"><i
                                    class='fas fa-user' style='font-size:24px;'></i> Login</a>
                            <a class="dropdown-item" href="sign up.php" style="color:#434343; font-weight:bold;"><i
                                    class='fas fa-user-plus' style='font-size:24px;'></i>Sign Up</a>
                            <a class="dropdown-item" href="#" style="color:#434343; font-weight:bold;"><i
                                    class="fa fa-shopping-cart" style="font-size:24px;"> </i> My Cart <span
                                    class="badge badge-danger">1</a>
                        </div>
                    </li>

                    <form class="form-inline">

                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                            style="color:black;">
                    </form>

                </ul>

                <!-- Links -->


            </div>
            <!-- Collapsible content -->
        </div>
    </nav>


    <br>
    <br>
    <br>
    <br>


    <div class="container">
        <!-- Start your project here-->

        <div class="row">

            <!--Equipment data-->

            <div class="col-sm-12 col-md-12 col-lg-12">

                <a style="color:#434343;" href="product1.php">Products
                </a>
                <span> / </span>
                <a href="product3.php" style=" color:#434343;">Food Service Equipment</a>
                <span> / </span>
                <span style=" color:#434343; font-weight:bold;"><?php echo $_GET['productname'];?></span>
            </div>
        </div>

        <br>


        <!--row-->
        <div class="row">

            <div class="col-sm-8 col-md-5 col-lg-5">


                <div class="descimg">
                    <img src="images/<?php echo $_GET['image']; ?>">
                </div>
            </div>


            <!--second column-->
            <div class="col-sm-4 col-md-2 col-lg-2">

                <!--second column's row-->
                <div class="row">

                    <!--four boxes-->

                    <!--1st box-->
                    <div class="col">
                        <div class="subimg">
                        </div>
                    </div>

                </div>


                <!--2nd box-->
                <div class="row">


                    <div class="col">
                        <div class="subimg">
                        </div>
                    </div>

                </div>


                <!--3rd box-->
                <div class="row">


                    <div class="col">
                        <div class="subimg">
                        </div>
                    </div>

                </div>


                <!--4th box-->
                <div class="row">


                    <div class="col">
                        <div class="subimg">
                        </div>
                    </div>

                </div>

            </div>


            <!--Data, Quantity, description of products-->

            <div class="col-sm-12 col-md-5 col-lg-5">

                <div style="color:#434343;">

                    <h1><?php echo $_GET['productname'];?></h1>
                    <br>
                    <h2>₱<?php  echo $_GET['price'];?></h2>

                </div>
                <div style="border: 1px solid #434343;"></div>

                <div style="color:#434343;">
                    <br>
                    <span style="font-size:15px;">Quantity<span>
                            <br>

                            <form id='myform' method='POST' action='#'>
                                <input type='button' value='-' class='qtyminus' field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='quantity' />
                            </form>
                            <br>

                            <a class="btnaddcart" href="#">ADD TO CART</>
                                <a class="btnbuynow" href="#">BUY NOW</a>
                                <br>
                                <br>
                                <div style="border: 1px solid #434343;"></div>

                </div>
            </div>

        </div>



    </div>
    <!--end of row-->

    <br>
    <br>

    <div class="container">
        <!-- Start your project here-->
        <div class="row">
            <div class="flex-left flex-column">

                <h1 style="color:#0d47a1;font-weight:bold; ">Description</h1>


                <br>
                <br>

                <p class="animated fadeIn text-muted text-left text-justify" style="font-size:20px;">
                   <?php echo $_GET['description'];?>
                </p>
               

                <br>
                <br>
            </div>
        </div>

    </div>


    <!-- Footer -->
    <footer class="page-footer font-small primary-color-dark pt-4 mt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    Copyright 2019 ©
                    <a href="index.php"> Quickitchen</a>


                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                    <!-- Links -->


                    <ul class="list-unstyled text-right ">
                        <li class="list-inline-item ">
                            <a href="contact_us.php" style="font-weight:bold;">Contact Us</a>
                        </li>

                        <li class="list-inline-item ">
                            <a href="#" style="font-weight:bold;">About Us</a>
                        </li>

                        <li class="list-inline-item ">
                            <a href="#!" style="font-weight:bold;">Terms & Condition</a>
                        </li>

                        <li class="list-inline-item ">
                            <a href="#!" style="font-weight:bold;">Privacy Policy</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->



            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright stylish-color-dark text-center py-2">

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->









    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Your custom scripts (optional) -->

    <script type="text/javascript">
    //js Quantity

    jQuery(document).ready(function() {
        // This button will increment the value
        $('.qtyplus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
        // This button will decrement the value till 0
        $(".qtyminus").click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If it isn't undefined or its greater than 0
            if (!isNaN(currentVal) && currentVal > 0) {
                // Decrement one
                $('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
    });
    </script>

</body>

</html>