<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        Cart
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
    </style>
</head>

<body>


    <!--Header-->

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#f1f1f1;">

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
                                    id="cart-item" class="badge badge-danger">1</a>
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

    <!--header for equipment category

    <div class="container-fluid">

        <div class="row mx-auto p">

            <div class="col-sm-4 col-md-4 col-lg-4">

                <div class="header">
                    <a href="product2.php"><span style="color:white; font-weight:bold;">Cooking Equipment</span></a>
                </div>

            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="header">
                    <a href="product3.php"><span style="color:white; font-weight:bold;">Food service
                            Equipment</span></a>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="header">
                    <a href="product4.php"><span style="color:white; font-weight:bold;">Preparation Equipment</span></a>
                </div>
            </div>


        </div>
    </div>
   -->
    <br>
    <br>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];}else{ echo 'none';} unset($_SESSION['showAlert']); ?>"
                    class="alert alert-success alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} unset($_SESSION['showAlert']); ?></strong>
                </div>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="7">
                                    <h4 class="text-center text-info m-0">Your Cart</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>
                                    <a href="action.php?clear=all" class="badge-danger badge p-1"
                                        onclick="return confirm('Are you sure to clear your cart?');"><i
                                            class="fas fa-trash"></i>&nbsp;&nbsp;
                                        Clear All</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          require 'db.php';
                          $stmt = $con->prepare("select * from cart");
                          $stmt -> execute();
                          $result = $stmt->get_result();
                          $grand_total = 0;
                          while($row = $result->fetch_assoc()){
                          ?>
                            <tr>

                                <input type="hidden" class="pid" value="<?php echo $row['id'];?>">
                                <td><?php echo $row['product_name']; ?></td>
                                <td><img src="images/<?php echo $row['image']; ?>" style="width:70px; height:70px;">
                                </td>
                                <td>₱<?php echo number_format($row['price'],2); ?></td>
                                <input type="hidden" class="pprice" value="<?php echo $row['price'];?>">
                                <td><input type="number" class="form-control itemQty" value="<?php echo $row['qty']; ?>"
                                        style="width:70px;"></td>
                                <td>₱<?php echo number_format($row['total_price'],2); ?></td>
                                <td><a href="action.php?remove=<?php echo $row['id']?>" class="text-danger lead"
                                        onclick="return confirm('Remove this item?')"><i class="fas fa-trash-alt"> </i>
                                        Remove</a>
                                </td>
                            </tr>
                            <?php  $grand_total +=$row['total_price'];?>
                            <?php  } ?>
                            <tr>
                                <td colspan="2">
                                    <a href="product1.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>
                                        Continue Shopping </a>
                                </td>
                                <td colspan="2"><strong>Grand total</strong></td>
                                <td><strong>₱<?php echo number_format($grand_total,2); ?></strong></td>
                                <td>
                                    <a href="checkout.php"
                                        class="btn btn-info <?php ($grand_total>1)?"":"disabled"; ?>"><i
                                            class="fas fa-credit-card"></i> Check Out </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
    $(document).ready(function() {

        $(".itemQty").on('change', function() {
            var $el = $(this).closest('tr');

            var pid = $el.find(".pid").val();
            var pprice = $el.find(".pprice").val();
            var qty = $el.find(".itemQty").val();


            $.ajax({
                url: 'action.php',
                method: 'post',
                cache: false,
                data: {
                    qty: qty,
                    pid: pid,
                    pprice: pprice,
                    action: "update"
                },
                success: function(response) {

                    location.reload();
                    console.log(response);
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