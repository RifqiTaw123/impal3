<?php 
    include 'database/database.php';
    $akun = akun();
    $akun->loginnasabah();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GangBank</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><!-- boostrap lib -->
    <link rel="stylesheet" href="assets/bootstrap/font-awesome-4.7.0/css/font-awesome.min.css"><!-- boostrap fa -->
    <script src="assets/jquery/jquery.min.js"></script><!-- jQuery library --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script><!-- bootstrap script lib -->
    <link href="assets/css/sidenavbar.css" rel="stylesheet">
    <style>
    body {
        font-family: "Times New Roman", Times, serif;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-color: rgb(0, 119, 255);">
            <div class="col-4">
                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle" style="margin-top:8px;" data-toggle="tooltip" title="Navigation"><img src="assets/media/image/TogleBtn.png" height="45px"></a>
            </div>
            <div class="col-4" align="center">
                <a href="index.html"><img src="assets/media/image/LOGO.png" width="250px"></a>
            </div>
            <div class="col-4" align="right">
                <div class="dropdown" style="margin-top:8px;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/media/image/User.png" height="45px">
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.html">SIGN IN</a>
                        <a class="dropdown-item" href="register.html">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="row">
                <div name="mysidebar" id="wrapper">
                    <div id="sidebar-wrapper" style="font-size:25px;">
                        <ul class="sidebar-nav">
                            <li class="sidebar-brand" style="background-color: blue">
                                <a href="#">
                                    <img src="assets/media/image/LOGO.png" height="50px" style="margin-left:17px;">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/media/image/Avatar.png" width="30px">  My Profile</a>   
                            </li>
                            <li>
                                <a href="#"><img src="assets/media/image/Trans.png" width="30px"> Transaction</a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/media/image/Contact.png" width="30px">  Contact Us</a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/media/image/About.png" width="30px">  About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container" align="center" style="margin-top:70px;">
                <div class="col-4">
                    <div class="card bg-primary text-white">
                        <div class="card-header" align="center">SIGN IN <img src="assets/media/image/LOGO.png" width="145px" style="margin-top:-3px;"></div>
                        <div class="card-body" style="height:310px; background-color: rgb(0, 162, 255)">
                            <form method="POST" align="left">
                                <div class="form-group">
                                  <label for="usr">Username:</label>
                                  <input class="form-control" id="usr" placeholder="Enter Username" name="username">
                                </div>
                                <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                </div>
                                <a href="#" style="color:white;">Lupa Password?</a>
                                <div class="form-group form-check" style="margin-top:7px">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                  </label>
                                </div>
                                <div align="center">
                                    <button name="loginpembeli" type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </form>
                        </div> 
                        <div class="card-footer" align="center">Belum Punya Akun?<a href="#" style="color:white;"> Klik Disini</a></div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</body>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script/navigation.js"></script> 
</html>
