<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Quickitchen
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
    .dark-blue-text {

        color: #434343;

    }

    .transitionsearch {
        -webkit-transition-timing-function: linear;
        -webkit-transition-property: width;
        -webkit-transition-duration: 2s;
        transition-property: width;
        transition-duration: 2s;
        transition-timing-function: linear;
    }

    .transitionsearch:hover {
        width: 300px;
    }

    .fakedesc {

        font-weight: bold;
        color: :#0d47a1;
        border: 1px solid #ccc;
        padding: 20px 0;
        text-align: center;

    }

    .cfakeimg {
        height: 200px;
        background: #0d47a1;
        border: 1px solid #ccc;
    }
    </style>
</head>

<body>


    <!--Header-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#f1f1f1;">

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
                        <a class="nav-link" href="#" style="color:#434343; font-weight:bold;">HOME
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
                            <a class="dropdown-item" href="mycart.php" style="color:#434343; font-weight:bold;"><i
                                    class="fa fa-shopping-cart" style="font-size:24px;"> </i> My Cart <span
                                    id="cart-item" class="badge badge-danger">1</a>
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

    <!--Picture carousel-->


    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="margin:0;">

                <div class="carousel-item active">

                    <img class="d-block w-100 " src="images/home banner.jpg" alt="First slide">

                </div>

                <div class="carousel-item">

                    <img class="d-block w-100" src="images/home banner.jpg" alt="Second slide">

                </div>

                <div class="carousel-item">

                    <img class="d-block w-100" src="images/home banner.jpg" alt="Third slide">

                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>
        </div>
    </div>
    <br>
    <br>

    <!--Equipments-->

    <div class="container">

        <div class="row">


            <div class="col-md-4 col-lg-4 col-sm-12">
                <a href="product1.php">
                    <div class="cfakeimg">
                    </div>
                </a>
                <div class="fakedesc"> COOKING EQUIPMENT </div>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <a href="product1.php">
                    <div class="cfakeimg">
                    </div>
                </a>
                <div class="fakedesc"> FOOD SERVICE EQUIPMENT
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <a href="product1.php">
                    <div class="cfakeimg">

                    </div>
                </a>
                <div class="fakedesc"> PREPARATION EQUIPMENT </div>
            </div>

        </div>
    </div>

    <br>
    <br>

    <!--Why choose us description-->

    <div class="container">
        <!-- Start your project here-->
        <div class="row">
            <div class="flex-center flex-column mx-auto">
                <h1 style="color:#0d47a1;font-weight:bold;">Why Choose Us?</h1>

                <br>
                <br>

                <p class="animated fadeIn text-muted text-center text-justify" style="font-size:20px;"> Choosing
                    Quickitchen is a keen decision particularly on the off chance that you were </p>
                <p class="animated fadeIn text-muted text-center text-justify" style="font-size:20px;"> attempting to
                    build-up or enchancing your food business. </p>
                <p class="animated fadeIn text-muted text-center text-justify" style="font-size:20px;"> Quickitchen
                    offers a reasonable cost than you expected that serves a top notch</p>
                <p class="animated fadeIn text-muted text-center text-justify" style="font-size:20px;"> kitchen
                    equipment that makes your cooking for proficient. </p>
                <p class="animated fadeIn text-muted text-center text-justify" style="font-size:20px;"> Investing your
                    time and money with us wasn't a wrong call because with a afford- </p>
                <p class="animated fadeIn text-muted text-center text-justify" style="font-size:20px;"> able price along
                    with a exceptional design we guarantee your satisfaction. </p>

            </div>
        </div>

    </div>
    <br>
    <br>


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

    <script type="text/javascript">
    //Jquery fade-in

    $(document).ready(function() {
        $("body").addClass("animated fadeIn");

        load_cart_item_number();

        function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                    cartItem: "cart_item"
                },
                success: function(response) {
                    $("#cart-item").html(response);
                }
            });
        }

    });
    </script>

</body>

</html>