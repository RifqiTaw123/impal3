<?php
    class dbconnect{
        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "mybank";

        public function connecttodb(){
            try {    
                //create PDO connection 
                $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            }catch(PDOException $e) {
                //show error
                die("Terjadi masalah: " . $e->getMessage());
            }

            return $db;
        }
    }

    class akun extends dbconnect{
        //login mencoba
        public function loginnasabah(){
            if(isset($_POST['loginpembeli'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM Akun WHERE Username=:username AND Password=:password";
                $stmt = $this->connecttodb()->prepare($sql);
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
    } 
?>