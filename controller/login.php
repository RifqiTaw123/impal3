<?php
require_once("connect.php");

if(isset($_POST['loginpembeli'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username == "admin" and $password == "admin"){
    $sql = "SELECT * FROM Akun WHERE username=:username AND password=:password";
    $stmt = $db->prepare($sql);
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password
	  );
    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // jika user terdaftar
    if($user){
		  session_start();
      $_SESSION["user"] = $user;
      // login sukses, alihkan ke halaman timeline
      header("Location: admin/adminindex.php?login-admin-sukses");
    }else{
      header("Location: login.php?user-tidak-terdaftarss");
    }
  }else{
    $sql = "SELECT * FROM Akun WHERE Username=:username AND Password=:password";
    $stmt = $db->prepare($sql);
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password
	  );
    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // jika user terdaftar
    if($user){
	    session_start();
        $_SESSION["user"] = $user;
        // login sukses, alihkan ke halaman timeline
      header("Location: z_nasabah/index.html?login-pembeli-sukses");
    }else{
      header("Location: z_nasabah/login.html?user-tidak-terdaftar");
    }
  }   
}

?>