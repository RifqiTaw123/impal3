<?php
    include '../controller/transaksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GangBank</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"><!-- boostrap lib -->
    <link rel="stylesheet" href="../assets/bootstrap/font-awesome-4.7.0/css/font-awesome.min.css"><!-- boostrap fa -->
    <script src="../assets/jquery/jquery.min.js"></script><!-- jQuery library --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script><!-- bootstrap script lib -->
    <link href="../assets/css/sidenavbar.css" rel="stylesheet">
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
                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle" style="margin-top:8px;" data-toggle="tooltip" title="Navigation"><img src="../assets/media/image/TogleBtn.png" height="45px"></a>
            </div>
            <div class="col-4" align="center">
                <a href="index.html"><img src="../assets/media/image/LOGO.png" width="250px"></a>
            </div>
            <div class="col-4" align="right">
                <div class="dropdown" style="margin-top:8px;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <img src="../assets/media/image/User.png" height="45px">
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
                                    <img src="../assets/media/image/LOGO.png" height="50px" style="margin-left:17px;">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/media/image/Avatar.png" width="30px">  My Profile</a>   
                            </li>
                            <li>
                                <a href="#"><img src="../assets/media/image/Trans.png" width="30px"> Transaction</a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/media/image/Contact.png" width="30px">  Contact Us</a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/media/image/About.png" width="30px">  About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container" align="center" style="margin-top:70px;">
                <div class="col-4">
                    <div class="card bg-primary text-white">
                        <div class="card-header" align="center">TRANSFER <img src="../assets/media/image/LOGO.png" width="145px" style="margin-top:-3px;"></div>
                        <div class="card-body" style="height:330px; background-color: rgb(0, 162, 255)">
                            <form align="left" method="POST">
                                <table border="0" >
                                    <tr>
                                        <div class="form-group">
                                          <label for="rekening">Masukan No. Rekening:</label>
                                          <input type="text" class="form-control" id="rekening" placeholder="Enter No Rekening" name="rekening"required>
                                        </div>
                                    </tr>
                                    <tr>
                                     <div class="row">
                                        <div class="col-6">
                                          <select class="form-control" name="kodeBank" id="sel1" style="width: 222%" style="display: inline-block;">
                                                <option value="">Kode Bank</option>
                                                <option value="B001">GangBank Bandung    : B001</option>
                                                <option value="B002">GangBank Jogjakarta : B002</option>
                                                <option value="B003">GangBank Jakarta    : B003</option>
                                                <option value="004">GangBank Semarang    : B004</option>
                                                <option value="004">GangBank Cilegon     : B005</option>
                                                <option value="004">GangBank Bali        : B006</option>
                                                <option value="004">GangBank Malang      : B007</option>
                                                <option value="004">GangBank Bogor       : B008</option>
                                                <option value="004">GangBank Bekasi      : B009</option>
                                                <option value="004">GangBank Tanggeranmg : B010</option>
                                          </select> 
                                        </div>
                                    </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                          <label for="rekening">Masukan Jumlah :</label>
                                          <input type="text" class="form-control" id="jumlah" placeholder="Enter jumlah" name="jumlah"required>
                                        </div>
                                    </tr><br>
                                    <tr>
                                        <td>
                                            <div class="row">
                                            <div class="col-6">
                                                <div >
                                                    <button type="submit" class="btn btn-primary" name="transfer">Transfer</button>
                                                </div>
                                        </div>
                                        </td>
                                        
                                    </tr>
                                   
                                </table>
                            </form>
                        </div> 
                        <div class="card-footer" align="center"></div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</body>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/script/navigation.js"></script> 
</html>
