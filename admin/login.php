<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <script src="https://kit.fontawesome.com/a0d0266911.js" crossorigin="anonymous"></script>
    <title>admin login</title>
</head>

<body id="main" >
    <h1 id="head">ADMIN LOGIN</h1>
    <div id="content">
        <div id="inner">
            <h3>Login Now</h3>
            <p style="color: red; text-align: center" ><?php if(!empty($_GET['q']) && $_GET['q'] == 'err' ) echo "Username or Password incorrect"; else echo "";  ?></p>
            <form action="../includes/check_admin.php" method="POST" class="needs-validation" novalidate>
                <div id="input">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Email must be correct.</div>
                </div>
                <div id="input">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters.</div>
                </div>
                <div id="line">
                    <a href="#" >Forgot Password?</a>
                </div>
                <button id="btn" type="submit">LOGIN</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
</body>

</html>