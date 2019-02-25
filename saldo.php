<?php 
    include 'controller/saldo.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GangBank</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="script/main.js"></script>
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
    .form_login{
        	    box-sizing : border-box;
        	    padding: 5px;
        	    font-size: 16px;
        	    margin-bottom: 20px;
        	    width: 250px;
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
            <div>
                <form>
                    <!-- <div align="right">
                        <div class="card bg-primary text-white" style= "height: 50px; width: 50px ; font-size: 10px">
                            <div class="card-body">Halaman Cek Saldo</div>
                    </div> -->
                </form>
                <form>
                    <div align="center">
                        <div class="card bg-primary text-white" style= "height: 100px; width: 300px ; margin-top: 150px ; font-size: 30px">
                            <div class="card-body">Jumlah Saldo</div>
                            <input type="text" class="form-control form-control"><br>
                            

                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script/navigation.js"></script> 
</html>
