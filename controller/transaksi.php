<?php
require_once("connect.php");

if(isset($_POST['transfer'])){
        // session_start();

        // filter data yang diinputkan
    $norek = filter_input(INPUT_POST, 'rekening', FILTER_SANITIZE_STRING);
    $jumlah = filter_input(INPUT_POST, 'jumlah', FILTER_SANITIZE_STRING);
        // enkripsi password
    $kodebank = filter_input(INPUT_POST, 'kodebank', FILTER_SANITIZE_STRING);
        


        // menyiapkan query
    $sql = "INSERT INTO Rekening (No_Rekening, Kode_Bank, Saldo) 
            VALUES (:norek, :kodebank, :jumlah)";
    $stmt = $db->prepare($sql);

        // bind parameter ke query
    $params = array(
        ":norek" => $norek,
        ":kodebank" => $kodebank,
        ":jumlah" => $jumlah
    );

        // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
    if($saved){
        header("Location: z_nasabah/home.html?sukses");
    } else{
        header("Location: transaksi.php?gagal");
}
    }

?>
