<nav class="navbar navbar-expand-md navbar-light bg-light m-xl-0 mr-xl-5 ml-xl-5 p-xl-0 d-lg-inline-flex flex-wrap">
    <img class="navbar-brand mr-xl-5" 
      src="https://df5apg8r0m634.cloudfront.net/images/89b305e76ab988a2ac8e9c7d704df0cd.png" />
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
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="dd-item" href="#">Video Guides</a>
                    <a class="dropdown-item" id="dd-item" href="#">What's PD</a>
                    <a class="dropdown-item" id="dd-item" href="#">After Sale-Guarantee</a>
                    <a class="dropdown-item" id="dd-item" href="#">About Us</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-lg-2">
                <a class="nav-link dropdown-toggle" id="nv-link" id="dd-toggle" href="#" role="button"
                    data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    MEN
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="dd-item" href="#">Women's Eyeglasses</a>
                    <a class="dropdown-item" id="dd-item" href="#">Women's Sunglasses</a>
                    <a class="dropdown-item" id="dd-item" href="#">All Women's Glasses</a>
                    <a class="dropdown-item" id="dd-item" href="#">New Arrivals</a>
                    <a class="dropdown-item" id="dd-item" href="#">Quick Frame Finder</a>
                    <a class="dropdown-item" id="dd-item" href="#">Shop By Face Shape</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-lg-2">
                <a class="nav-link dropdown-toggle" id="nv-link" id="dd-toggle" href="#" role="button" data-hover="dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    WOMEN
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="dd-item" href="#">Women's Eyeglasses</a>
                    <a class="dropdown-item" id="dd-item" href="#">Women's Sunglasses</a>
                    <a class="dropdown-item" id="dd-item" href="#">All Women's Glasses</a>
                    <a class="dropdown-item" id="dd-item" href="#">New Arrivals</a>
                    <a class="dropdown-item" id="dd-item" href="#">Quick Frame Finder</a>
                    <a class="dropdown-item" id="dd-item" href="#">Shop By Face Shape</a>
                </div>
            </li>   
            <li class="nav-item mr-lg-2">
                <a class="nav-link" id="nv-link" href="#">KIDS</a>
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
                    <button class="btn btn-primary d-block m-2" id="sign-in">Sign In</button>
                    <button class="btn btn-outline-primary m-2" id="sign-up">Create an Account</button>
                </div>
            </div>
            <div class="dropdown mt-3">
                <a class="dropdown-toggle pb-2 px-2" id="nv-link" id="dd-toggle" data-toggle="dropdown" data-hover="dropdown">
                <span style="cursor: pointer" id="symbol"><?php 
                // $ip = $_SERVER['REMOTE_ADDR'];
                $ip = '39.40.27.157';
                            $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test")); 
                            echo $details->currency->symbol;?></span> 
                <span style="cursor: pointer" id="currency" ><?php 
                // $ip = $_SERVER['REMOTE_ADDR'];
                $ip = '39.40.27.157';
                            $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test")); 
                            echo $details->currency->code;?></span>
                </a>
                <ul class="dropdown-menu" id="dropdown-currency">
                    <li class="dropdown-item" id="USD" onClick="currency_conversion('USD')" >$ USD</li>
                    <li class="dropdown-item" id="EUR" onClick="currency_conversion('EUR')" >&euro; EUR</li>
                    <li class="dropdown-item" id="PKR" onClick="currency_conversion('PKR')" >Rs PKR</li>
                    <li class="dropdown-item" id="INR" onClick="currency_conversion('INR')" >&#x20B9; IND</li>
                </ul>
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
                            <form action="">
                                <div class="form-group">
                                    <div class="form-group col-sm-12">
                                        <label for="email" class="col-form-label sr-only"> Email </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="pswd" class="col-form-label sr-only"> Password </label>
                                        <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="form-check-inline col-4 mx-0 mr-4 pr-0 flex-column">
                                            <label for="remember" class="form-check-label"><input type="checkbox" name="remember" id="remember" class="form-check-input"> Remember me</label>
                                        </div>
                                        <div class="form-check-inline col-4 mr-0 pl-1 offset-3">
                                            <a href="#" class="col-form-label text-right"> Forget Password?</a>
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
                            <form action="">
                                <div class="form-group">
                                    <div class="form-group col-sm-12">
                                        <label for="email" class="col-form-label sr-only"> Email </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="pswd" class="col-form-label sr-only"> Password </label>
                                        <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-sm-12 flex-row">
                                        <div class="form-check col-6">
                                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                            <label for="remember" class="form-check-label"> Remember me</label>
                                        </div>
                                        <div class="form-check col-6">
                                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                            <label for="remember" class="form-check-label"> Remember me</label>
                                        </div>
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