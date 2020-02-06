<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Contact Us
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
    .map-container-6 {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container-6 iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    .dark-blue-text {
        color: #434343;
    }

    .borderaddress {
        padding: 35px;
        border: 1px solid #ccc;
        width: auto;
        color: white;
        background-color: #434343;
        text-transform: uppercase;
        font-size: 15px;

    }
    </style>
</head>

<body>


    <!--header-->

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#f1f1f1;">

        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="index.php">
                <img src="images/qk logo.png" width="240" height="55"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="dark-blue-text"> <i class="fas fa-bars fa-1x"></i></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse " id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav ml-auto w-100 justify-content-end ">
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
                        <a class="nav-link" href="#" style="color:#434343; font-weight:bold;">CONTACT US</a>
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
                    <form class="form-inline ">

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



    <!--contact form-->

    <div class="container">
        <hr class="my-5">

        <!--Section: Contact-->
        <section id="contact">


            <!--Grid row-->
            <div class="row">


                <!--Grid column-->
                <div class="col-lg-5 col-md-12">


                    <!-- Form contact -->
                    <form class="p-5 black-text  border border-dark">
                        <!-- Heading -->
                        <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>
                        <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                            <input type="text" id="form3" class="form-control form-control-sm">
                            <label for="form3">Your Name</label>
                        </div>
                        <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" class="form-control form-control-sm">
                            <label for="form2">Your Email</label>
                        </div>
                        <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                            <input type="text" id="form32" class="form-control form-control-sm">
                            <label for="form34">Subject</label>
                        </div>
                        <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="form8" class="md-textarea form-control form-control-sm"
                                rows="4"></textarea>
                            <label for="form8">Your Message</label>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </form>
                    <!-- Form contact -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 col-md-12">

                    <!--Grid row-->
                    <div class="row text-center">

                        <!--Grid column-->


                    </div>

                    <!--Grid row-->



                    <!--Google map-->

                    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482.42001817770057!2d120.96319921163332!3d14.69221414558394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e37a1a36120867!2sGomeco%20Metal%20Corporation!5e0!3m2!1sen!2sph!4v1576305979292!5m2!1sen!2sph"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    </div>
                    <div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="borderaddress">
                                    <p><i class="fa fa-map-marker fa-1x mr-2 grey-text"></i>#2 Rincon Street., Malinta,
                                        Valenzuela City, Philippines</p>
                                    <p><i class="fa fa-envelope fa-1x mr-2 grey-text"></i>info@gomecogroup.com</p>
                                    <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>(02) 292-4882/86 /(02) 292-4858
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

        </section>
        <!--Section: Contact-->
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
                            <a href="#" style="font-weight:bold;">Contact Us</a>
                        </li>

                        <li class="list-inline-item ">
                            <a href="about_us.php" style="font-weight:bold;">About Us</a>
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



    <!--javascript for  google map-->

    <script type="text/javascript">
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "New York"
        });
    }

    // Initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);

    // Carousel options

    $('.carousel').carousel({
        interval: 3000,
    })
    </script>

</body>

</html>