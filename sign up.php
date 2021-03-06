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


    <div class="container">
        <!-- Default form register -->

        <br>
        <br>
        <br>
        <br>



        <div class="mx-auto" style="width: 55%;">
           
            <p class="h4 mb-4">Sign up</p>
            
             
            <div class="form-row mb-4" >
               
                <div class="col">
                    <!-- First name -->
                    <input type="text" class="form-control" placeholder="First name" name="fname" id="fname" minlength="10" required>
                      <small class="form-text text-muted mb-4" id="valfname">
                        Please type your first name
                    </small>
                </div>

                <div class="col">
                    <!-- Last name -->
                    <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname" required>
                       <small class="form-text text-muted mb-4" id="vallname">
                        Please type your last name
                    </small>
                </div>
            </div>
             
            <!-- E-mail -->
            <input type="email" class="form-control mb-4" placeholder="E-mail" name="email" id="email" required>  
                  <small class="form-text text-muted mb-4" id="valemail">
                       Please type your email
                    </small>
            <div class="form-row mb-4">
                <div class="col">
                    <!-- Password -->
                    <input type="password" class="form-control" placeholder="Password" name="pass" id="pass"
                        pattern=".{8,15}" required>
                    <small class="form-text text-muted mb-4" id="valpass">
                        At least 8 characters
                    </small>
                </div>


                <div class="col">

                    <!-- Confirm Password -->

                    <input type="password" class="form-control" placeholder="Confirm Password" name="cpass" id="cpass"
                        pattern=".{8,15}" required>
                    <small class="form-text text-muted mb-4" id="valcpass">
                       Re-enter your password
                    </small>

                </div>
              
            </div>

            <!-- Create Account -->
            <button class="btn  my-4" style="background-color:#0d47a1; color:white;" type="submit" name="btn-save"
                id="btnsubmit">Create
                Account</button>

            <div id="error">
            </div>
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
    <script type="text/javascript">
    $(document).ready(function() {

        $("#btnsubmit").click(function() {
            var firstname = $("#fname").val();
            var lastname = $("#lname").val();
            var email = $("#email").val();
            var password = $("#pass").val();

            var data = "fname=" + firstname + "&lname=" + lastname + "&email=" + email +
                "&pass=" + password;
            $.ajax({
                url: 'action_signup.php',
                method: 'post',
                data: data,
                success: function(output) {
                    console.log(output)
                    alert('sign up done!')
                }
           
            });
        });
       
      $("#email").keyup(function(){
            
            if(validateEmail()){
				// if the email is validated
				// set input email border green
				$("#email").css("border","2px solid green");
				// and set label 
				$("#valemail").html("<p class='text-success'>Valid email</p>");
			}
            
            else{
				// if the email is not validated
				// set border red
				$("#email").css("border","2px solid red");
				$("#valemail").html("<p class='text-danger'>Please type a valid email</p>");
			}
      });

            $("#fname").on("keyup", function() {
             
             if ( $(this).val().match('^[a-zA-Z]{3,25}$') ) {

                 $("#fname").css("border","2px solid green");
             				// and set label 
                 $("#valfname").html("<p class='text-success'>First name is valid</p>");
            } else {
                    $("#fname").css("border","2px solid red");
             	  $("#valfname").html("<p class='text-danger'>Please type a valid first name</p>");
                 }
             });

            $("#lname").on("keyup", function() {
             
             if ( $(this).val().match('^[a-zA-Z]{3,25}$') ) {

                 $("#lname").css("border","2px solid green");
             				// and set label 
                 $("#vallname").html("<p class='text-success'>Last name is valid</p>");
            } else {
                    $("#lname").css("border","2px solid red");
             	  $("#vallname").html("<p class='text-danger'>Please type a valid last name</p>");
                 }
             });

       $('#pass, #cpass').on('keyup', function () {
          
           if ($('#pass').val() == $('#cpass').val()) {
  	     
              $("#cpass").css("border","2px solid green");
				//set passMsg 
	          	$("#valcpass").html("<p class='text-success'>Password match</p>");
    
       } 
           else if ($('#cpass').val().length == 0){

              	$("#cpass").css("border","2px solid red");
				//set passMsg 
				$("#valcpass").html("<p class='text-danger'>Please re-enter your password</p>");
            }
             
             else {
      
              	$("#cpass").css("border","2px solid red");
				//set passMsg 
				$("#valcpass").html("<p class='text-danger'>Passwords don't match</p>");
             }
         });


      $("#pass").keyup(function(){
			// check
			if(validatePassword()){
				// set input password border green
				$("#pass").css("border","2px solid green");
				//set passMsg 
				$("#valpass").html("<p class='text-success'>Password is valid</p>");
			}
              
            else{
					// set input password border red
				$("#pass").css("border","2px solid red");
				//set passMsg 
				$("#valpass").html("<p class='text-danger'>Atleast 8 characters long</p>");
			}
		
		});
  
      function validateEmail(){
		// get value of input email
		var email=$("#email").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }

	}
    
      function validatePassword(){
		//get input password value
		var pass=$("#pass").val();
		// check it s length
		if(pass.length > 7){
			return true;
		}
        else{
			return false;
		}

	}  

});

 

    </script>

</body>

</html>