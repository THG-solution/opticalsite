<nav class="navbar navbar-expand-md navbar-light bg-light m-xl-0 mr-xl-5 ml-xl-5 p-xl-0 d-lg-inline-flex flex-wrap">
    <a href="../index.php"><img class="navbar-brand mr-xl-3" 
      src="../assests/images/logo.jpeg" width="80px" height="60px" /> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mx-md-5 mr-auto ml-lg-5">
        <li class="nav-item dropdown mr-lg-2">
                <a class="nav-link dropdown-toggle" id="nv-link" id="dd-toggle" href="#" id="navbarDropdown" role="button"
                    data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    DISCOVER
                </a>
                <div class="dropdown-menu" id="dm">
                    <a class="dropdown-item" id="dd-item" href="../videoguides.php">Video Guides</a>
                    <a class="dropdown-item" id="dd-item" href="../links.php#section3">What's PD</a>
                    <a class="dropdown-item" id="dd-item" href="../links.php#section4">After Sale-Guarantee</a>
                    <a class="dropdown-item" id="dd-item" href="../aboutus.php">About Us</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-lg-2">
                <a class="nav-link dropdown-toggle" id="nv-link" id="dd-toggle" href="#"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    MEN
                </a>
                <div class="dropdown-menu" id="dm">
                    <a class="dropdown-item" id="dd-item" href="mens_frame.php">Men's Eyeglasses</a>
                    <a class="dropdown-item" id="dd-item" href="mens_sunglass.php">Men's Sunglasses</a>
                    <a class="dropdown-item" id="dd-item" href="mens_allglass.php">All Men's Glasses</a>
                    <a class="dropdown-item" id="dd-item" href="../shopbybrand.php">Shop By Brand</a>
                    <a class="dropdown-item" id="dd-item" href="../shopbyface.php">Shop By Face Shape</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-lg-2">
                <a class="nav-link dropdown-toggle" id="nv-link" id="dd-toggle" href="#" 
                    data-toggle="dropdown" >
                    WOMEN
                </a>
                <div class="dropdown-menu" id="dm">
                    <a class="dropdown-item" id="dd-item" href="womens_frame.php">Women's Eyeglasses</a>
                    <a class="dropdown-item" id="dd-item" href="womens_sunglass.php">Women's Sunglasses</a>
                    <a class="dropdown-item" id="dd-item" href="womens_allglass.php">All Women's Glasses</a>
                    <a class="dropdown-item" id="dd-item" href="../shopbybrand.php">Shop By Brand</a>
                    <a class="dropdown-item" id="dd-item" href="../shopbyface.php">Shop By Face Shape</a>
                </div>
            </li>   
            <li class="nav-item mr-lg-2">
                <a class="nav-link" id="nv-link" href="../kid_glass.php">KIDS</a>
            </li>
            <li class="nav-item mr-lg-2">
                <a class="nav-link" id="nv-link" href="#">CLEARANCE SALE</a>
            </li>
            <li class="nav-item mr-lg-2">
                <a class="nav-link" id="nv-link" href="../tryon.php">TRY ON</a>
            </li>
        </ul>
        </div>
        <div class="d-inline-flex">
            <form class="form-group mt-2 d-md-block">
                <div class="input-group mb-0">
                <input type="text" class="form-control" id="search-bar" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-light" id="search-btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
                </div>
            </form>
            <div class="dropdown mx-4 mt-3">
                <a class="dropdown-toggle pb-2 px-2" id="nv-link" id="dd-toggle" data-toggle="dropdown" data-hover="dropdown">
                    <i class="fa fa-user-o"></i>
                </a>
                <div class="dropdown-menu" id="dropdown-user">
                <?php if(!empty($_SESSION['isLogin']) && $_SESSION['isLogin'] == 'OK')
                            echo '<button class="btn btn-primary d-block m-2" id="sign-out">Sign Out</button>';
                        else 
                            echo '<button class="btn btn-primary d-block m-2" id="sign-in">Sign In</button>
                            <button class="btn btn-outline-primary m-2" id="sign-up">Create an Account</button>';?>
                </div>
            </div>
            <div class="dropdown mt-3">
                <a class="dropdown-toggle pb-2 px-2" id="nv-link" id="dd-toggle" data-toggle="dropdown" data-hover="dropdown">
                <span style="cursor: pointer" id="symbol"><?php echo '$';
                // $ip = $_SERVER['REMOTE_ADDR'];
                // $ip = '39.40.27.157';
                //             $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test")); 
                //             echo $details->currency->symbol;?>
                </span> 
                <span style="cursor: pointer" id="currency" ><?php echo 'USD';
                // $ip = $_SERVER['REMOTE_ADDR'];
                // $ip = '39.40.27.157';
                //             $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test")); 
                //             echo $details->currency->code;?>
                            </span>
                </a>
                <ul class="dropdown-menu" id="dropdown-currency">
                    <li class="dropdown-item currency_val" id="USD" >$ USD</li>
                    <li class="dropdown-item currency_val" id="EUR" >&euro; EUR</li>
                    <li class="dropdown-item currency_val" id="PKR" >Rs PKR</li>
                    <li class="dropdown-item currency_val" id="INR" >&#x20B9; IND</li>
                </ul>
            </div>
            <div class="mx-2 mt-2">
                <a class="nav-link cart-icon" id="nv-link" href="" id="nv-link"><i class="fa fa-shopping-bag"></i></a>
            </div>
        </div>
    </div>
    
    <div class="modal fade " id="loginmodal" role="dialog">
        <div class="modal-dialog modal-md" role="content">
            <div class="modal-content">
                <div class="modal-header">
                <ul class="nav nav-pills" id="nv-pill" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#login">Login</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#create">Create</a>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <div id="login" class="tab-pane fade in">
                            <h3>Login</h3>
                            <p style="color: red; text-align: center" ><?php if(!empty($_GET['q']) && $_GET['q'] == 'err' ) echo "Username or Password incorrect"; else echo "";  ?></p>
                            <form action="../includes/check_customer.php" method="POST" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <div class="form-group col-sm-12">
                                        <label for="email" class="col-form-label sr-only"> Email </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Email must be correct.</div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="pswd" class="col-form-label sr-only"> Password </label>
                                        <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters.</div>
                                    </div>
                                    <div class="form-group col-12 d-flex flex-row justify-content-between">
                                        <div class="form-check-inline col-4 ">
                                            <label for="remember" class="form-check-label"><input type="checkbox" name="remember" id="remember" value="remember" class="form-check-input"> Remember me</label>
                                        </div>
                                        <div class="form-check-inline col-4 mr-0 pr-0">
                                            <a href="#" class="col-form-label"> Forget Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal"> Cancel </button>
                                    <button type="submit" class="btn btn-primary btn-sm ml-1"> Submit </button>
                                </div>
                            </form>
                        </div>
                        <div id="create" class="tab-pane fade in">
                            <h3>Create</h3>
                            <p style="color: red; text-align: center" ><?php if(!empty($_GET['q']) && $_GET['q'] == 'pnc' ) echo "Confirm Password not matched"; else echo "";  ?></p>
                            <p style="color: red; text-align: center" ><?php if(!empty($_GET['q']) && $_GET['q'] == 'er' ) echo "Something Wrong!"; else echo "";  ?></p>
                            <form action="includes/add_customer.php" method="POST" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <div class="form-group form-inline col-sm-12 justify-content-sm-start">
                                        <div class="col-4 mr-5 pl-0">
                                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" required pattern="[a-zA-Z]{3,}">
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Email must be correct.</div>
                                        </div>
                                        <div class="col-4 pl-0 ml-4">
                                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" required pattern="[a-zA-Z]{3,}">
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Email must be correct.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <!-- <label for="pswd" class="col-form-label sr-only"> Password </label> -->
                                        <input type="email" name="signemail" id="email" class="form-control" placeholder="you@example.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$" >
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Email must be correct.</div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="pswd" class="col-form-label sr-only"> Password </label>
                                        <input type="password" name="signpswd" id="pswd" class="form-control" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters.</div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="pswd" class="col-form-label sr-only"> Confirm Password </label>
                                        <input type="password" name="cnfrmpswd" id="pswd" class="form-control" placeholder="Confirm Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters.</div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal"> Cancel </button>
                                    <button type="submit" class="btn btn-primary btn-sm ml-1"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    var session_email = 'empty';
    <?php
    if (isset($_SESSION['email'])) {
      $email = "'{$_SESSION['email']}'"; ?>
      session_email = <?php echo "$email"; ?>;
    <?php
    } ?>
    alert(session_email);
  </script>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>