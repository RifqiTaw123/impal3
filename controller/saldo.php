<?php 
    //session_start();
    include("connect.php");

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mybank";
        
    $link = mysqli_connect($host,$user,$pass,$db);

    $sql = "select saldo from rekening where no_rekening = '666256111' order by saldo";
    $aksi = mysqli_query($link,$sql);

    echo "<div class='body table-responsive'>
            <table class='table table-striped' align='center'>
            <thead>
            <tr align='center'>
                
            </tr>
            </thead>
            </div>";
    
    $no = 1;
    while($data = mysqli_fetch_array($aksi)):?>
    <tbody>
    <tr align='center'>
        <td>
            <?php echo $data['saldo'];?>
        </td>
    <tr>
        <?php
         $no++;
    endwhile;
?>
