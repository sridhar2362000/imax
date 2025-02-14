<?php 
session_start();

// Admin credentials (hard-coded for demonstration purposes)
$adminUserphone = "1";
$adminPassword = "1";

// Check if the admin is already logged in
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    echo 'Welcome, Admin!<br>';
    echo '<a href="/logout">Logout</a>';
} else {
    // Check login attempt
    if (isset($_POST['userphone']) && isset($_POST['password'])) {
        $userphone = $_POST['userphone'];
        $password = $_POST['password'];

        // Check if entered credentials match admin credentials
        if ($userphone === $adminUserphone && $password === $adminPassword) {
            $_SESSION['admin'] = true;
            header('Location: /');
            exit();
        } else {
            echo 'Invalid username or password';
        }
    }
  }

?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Tivo - Premium Admin Template</title><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>

  <body>
    <!-- Loader starts-->
    
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card">
            <div>
              <!-- <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="" alt="looginpage"></a></div> -->
              <div class="login-main"> 
                <form class="theme-form">
                  <h4 class="text-center">Sign in to account</h4>
               <br><br>
                  <div class="form-group">
                    <label class="col-form-label">Phone No.</label>
                    <input class="form-control" type="tel" required="" name="userphone" required id="phone">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" id="password">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit" id="loggin">Sign in                 </button>
                    </div>
                  </div>
                  
                  <!-- <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/js/jquery-3.6.0.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Template js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
            <!--Toastr  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
            integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </div>
    
    <!-- <script>
      var phone=document.getElementById('phone');
      var password=document.getElementById('password');
      var login_btn=document.getElementById('loggin');

      login_btn.addEventListener('click',function(){
        if(password.value === '' && phone.value === ''){
        toastr.error("Error occurred ", "Error");
      }
      else if(password.value === 'admin' && phone.value === '1'){
        window.location = "index.php";
       
      }
      else{
        toastr.warning("Invalid credentials", "Warning");
      }
  
      })

    </script> -->
</body>
</html>