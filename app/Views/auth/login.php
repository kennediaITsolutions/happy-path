<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>HappyPath</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">

   <!-- Favicon -->
   <link rel="shortcut icon" href="public/assets/img/favicon.png">

   <!-- Web Fonts -->
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
   
   <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
   <link rel="stylesheet" href="<?php echo site_url('public/assets/bootstrap/css/bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo site_url('public/assets/fonts/icofont/icofont.min.css');?>">
   <link rel="stylesheet" href="<?php echo site_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css');?>">
   <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->
   
   <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
   <link rel="stylesheet" href="public/assets/plugins/apex/apexcharts.css">
   <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

   <!-- ======= MAIN STYLES ======= -->
   <link rel="stylesheet" href="public/assets/css/style.css">
   <!-- ======= END MAIN STYLES ======= -->

</head>

<body>

    <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Card -->
            <div class="card justify-content-center auth-card">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <h4 class="mb-5 font-20">Welcome To Happy Path</h4>

                        <form action="#">
                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="email" class="mb-2 font-14 bold black">Email Address</label>
                                <input name="email" type="email" id="email" class="theme-input-style" placeholder="Email Address">
                            </div>
                            <!-- End Form Group -->
                            
                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="password" class="mb-2 font-14 bold black">Password</label>
                                <input name="password" type="password" id="password" class="theme-input-style" placeholder="********">
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-between mb-20">
                                

                                <a href="forget-pass.html" class="font-12 text_color">Forgot Password?</a>
                            </div>

                         

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn long mr-20">Log In</button>
                                <span class="font-12 d-block"><a href="<?php echo site_url('register.php');?>" class="bold">Sign Up</a>,If you have no account.</span>
                            </div>
                        </form>
                    </div>                                    
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      HappyPath © 2021 All Right Reserved
      </footer>
      <!-- End Footer -->
   </div>
   <!-- End wrapper -->

   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
   <script src="<?php echo site_url('public/assets/js/jquery.min.js');?>"></script>
   <script src="<?php echo site_url('public/assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
   <script src="<?php echo site_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js');?>"></script>
   <script src="<?php echo site_url('public/assets/js/script.js');?>"></script>
   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

   <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   <script src="<?php echo site_url('public/assets/plugins/apex/apexcharts.min.js');?>"></script>
   <script src="<?php echo site_url('public/assets/plugins/apex/custom-apexcharts.js');?>"></script>
   <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
</body>

</html>