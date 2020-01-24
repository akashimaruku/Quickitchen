<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Products 2
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


    .fakedesc {
        font-weight: bold;
        border: 1px solid #ccc;
        padding: 20px 30px 15px 20px;
    }

    .cfakeimg {
        height: auto;
        width: auto;
        background: #f1f1f1;
        border: 1px solid #ccc;
    }

    .header {
        line-height: 90px;
        height: 90px;
        padding: 0;
        width: auto;
        background: #0d47a1;
        border: 1px solid #ccc;
        text-align: center;
    }

    .btnaddcart {
        text-align: center;
        color: white;
        height: auto;
        font-size: 0.50rem;
        padding: 3px 15px 3px 15px;
        width: auto;
        background-color: #0d47a1;
    }

    .btnaddcart:hover a {
        background-color: #0d47a1;
        color: #f1f1f1;

    }

    .facolor {
        color: black;
        border: 1px solid #ccc;
        padding: 6.5px 6.5px 6.5px 6.5px;
        margin-left: -16px;
    }

    .classinput input,
    input::-webkit-input-placeholder {
        font-size: 12px;
        line-height: 4;
    }
    </style>
</head>

<body>



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
                            <a class="dropdown-item" href="mycart.php" style="color:#434343; font-weight:bold;"><i
                                    class="fa fa-shopping-cart" style="font-size:24px;"> </i> My Cart <span
                                    id="cart-item" class="badge badge-danger">1</a>
                            </a>
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
    <!--cooking equipment-->

    <div class="container">
        <div id="message">
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <a style="color:#434343;" href="product1.php">Products
                </a>
                <span> / </span>
                <span style="font-weight:bold; color:#434343;">Cooking Equipment</span>
            </div>
        </div>

        <br>


        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <h4>Cooking Equipment</h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 ">
                <div class="search-container float-right">
                    <form class="form-inline">
                        <input class="classinput form-control form-control-sm mr-3 w-55" type="text"
                            placeholder="Search for cooking equipment" aria-label="Search">
                        <a href="#"><i class="facolor fas fa-search" aria-hidden="true"></i> </a>
                    </form>
                </div>
            </div>

        </div>

        <div style="border: 1px solid #434343;"></div>


        <br>
        <br>

        <div class="row">
            <?php
                include 'db.php';
                $query = $con->query("select * from qk_products where product_type='Cooking Equipment'");
                while($row = $query->fetch_assoc()){ 
            ?>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <form action=" " class="form-submit">
                    <div class="cfakeimg">
                        <a href="productdetails.php"> <img src="images/<?php echo $row['image'];?>"
                                class="img-responsive" width="100%"></a>
                    </div>
                    <div class="fakedesc">
                        <p style="font-size:10px; color:#434343;"><?php echo $row['product_name'];?></p>
                        <span
                            style="font-size:15px; color:#0d47a1; font-weight:bold;"><?php echo "₱".$row['price'];?></span>
                        <!--<a href="#" class="float-right btnaddcart">ADD TO CART</a>-->
                        <button class="btn float-right btnaddcart addItemBtn">ADD TO CART</button>
                    </div>
                    <input type="hidden" class="pid" value="<?php echo $row['id']?>">
                    <input type="hidden" class="pname" value="<?php echo $row['product_name']?>">
                    <input type="hidden" class="pprice" value="<?php echo $row['price']?>">
                    <input type="hidden" class="pimage" value="<?php echo $row['image']?>">
                    <input type="hidden" class="pcode" value="<?php echo $row['product_code']?>">
                </form>
            </div>
            <?php   } ?>
        </div>

        <br>
        <br>

        <div class="row">
            <?php
                include 'db.php';
                $query = $con->query("select * from qk_products where product_type='Cooking Equipment'");
                while($row = $query->fetch_assoc()){ 
            ?>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <form action=" " class="form-submit">
                    <div class="cfakeimg">
                        <a href="productdetails.php"> <img src="images/<?php echo $row['image'];?>"
                                class="img-responsive" width="100%"></a>
                    </div>
                    <div class="fakedesc">
                        <p style="font-size:10px; color:#434343;"><?php echo $row['product_name'];?></p>
                        <span
                            style="font-size:15px; color:#0d47a1; font-weight:bold;"><?php echo "₱".$row['price'];?></span>
                        <!--<a href="#" class="float-right btnaddcart">ADD TO CART</a>-->
                        <button class="btn float-right btnaddcart addItemBtn">ADD TO CART</button>
                    </div>
                    <input type="hidden" class="pid" value="<?php echo $row['id']?>">
                    <input type="hidden" class="pname" value="<?php echo $row['product_name']?>">
                    <input type="hidden" class="pprice" value="<?php echo $row['price']?>">
                    <input type="hidden" class="pimage" value="<?php echo $row['image']?>">
                    <input type="hidden" class="pcode" value="<?php echo $row['product_code']?>">
                </form>
            </div>
            <?php   } ?>
        </div>


        <br>
        <br>

        <div class="row">
            <?php
                include 'db.php';
                $query = $con->query("select * from qk_products where product_type='Cooking Equipment'");
                while($row = $query->fetch_assoc()){ 
            ?>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <form action=" " class="form-submit">
                    <div class="cfakeimg">
                        <a href="productdetails.php"> <img src="images/<?php echo $row['image'];?>"
                                class="img-responsive" width="100%"></a>
                    </div>
                    <div class="fakedesc">
                        <p style="font-size:10px; color:#434343;"><?php echo $row['product_name'];?></p>
                        <span
                            style="font-size:15px; color:#0d47a1; font-weight:bold;"><?php echo "₱".$row['price'];?></span>
                        <!--<a href="#" class="float-right btnaddcart">ADD TO CART</a>-->
                        <button class="btn float-right btnaddcart addItemBtn">ADD TO CART</button>
                    </div>
                    <input type="hidden" class="pid" value="<?php echo $row['id']?>">
                    <input type="hidden" class="pname" value="<?php echo $row['product_name']?>">
                    <input type="hidden" class="pprice" value="<?php echo $row['price']?>">
                    <input type="hidden" class="pimage" value="<?php echo $row['image']?>">
                    <input type="hidden" class="pcode" value="<?php echo $row['product_code']?>">
                </form>
            </div>
            <?php   } ?>
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
    </script>

    <script>
    $(document).ready(function() {
        $(".addItemBtn").click(function(e) {
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var pid = $form.find(".pid").val();
            var pname = $form.find(".pname").val();
            var pprice = $form.find(".pprice").val();
            var pimage = $form.find(".pimage").val();
            var pcode = $form.find(".pcode").val();

            $.ajax({
                url: 'action.php',
                method: 'post',
                data: {
                    pid: pid,
                    pname: pname,
                    pprice: pprice,
                    pimage: pimage,
                    pcode: pcode,
                    action: "add"
                },
                success: function(response) {

                    $("#message").html(response);
                    window.scrollTo(0, 0);
                    load_cart_item_number();
                }
            });
        });


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