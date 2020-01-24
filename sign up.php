<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Sign Up
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



    <div class="container">
        <!-- Default form register -->

        <div class="mx-auto" style="width: 55%;">

            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Sign up</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control"
                            placeholder="First name">
                    </div>

                    <div class="col">
                        <!-- Last name -->
                        <input type="text" id="defaultRegisterFormLastName" class="form-control"
                            placeholder="Last name">
                    </div>
                </div>


                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- Password -->
                        <input type="password" id="defaultRegisterFormPassword" class="form-control"
                            placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            At least 8 characters and 1 digit
                        </small>
                    </div>


                    <div class="col">

                        <!-- Confirm Password -->

                        <input type="password" id="defaultRegisterFormPassword" class="form-control"
                            placeholder=" Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">


                        </small>


                    </div>
                </div>


                <!-- Create Account -->
                <button class="btn  my-4" style="background-color:#0d47a1; color:white;" type="submit">Create
                    Account</button>



                <!-- Social register 
                        <p>or sign up with:</p>
                        
                        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                        -->


                <hr>

                <!-- Terms of service -->
                <p>By creating account,
                    you agree to our
                    <a href="#">Terms & Condition</a>
                    and <a href="#">Privacy Policy</a>

                    <!-- Register -->
                    <p> Already a member?
                        <a href="login.php">Sign in</a>
                    </p>


            </form>
        </div>
    </div>
    <!-- Default form register -->

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
    <script type="text/javascript"></script>

</body>

</html>