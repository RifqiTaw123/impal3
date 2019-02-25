<?php
require_once("connect.php");

if(isset($_POST['lupasandi'])){
  $passwordl = $_POST['sandilama'];
  $passwordb = $_POST['sandibaru'];
  $sql = "UPDATE Akun SET password=:passwordb WHERE password=:passwordl";
  $stmt = $db->prepare($sql);
  // bind parameter ke query
  $params = array(
      ":passwordl" => $passwordl,
      ":passwordb" => $passwordb
  );
  $stmt->execute($params);

  if($stmt){
    header("Location: login.php??ubah-sandi-sukses");
  }else{
    header("Location: #");
  }
}

?>
