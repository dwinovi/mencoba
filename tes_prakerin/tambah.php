<?php
include('config.php');
if(isset($_POST['tambah']))
    {
    
        // ambil data dari formulir
        $commend = $_POST['commend'];
         $nama = $_POST['nama'];
         $tlp = $_POST['tlp']
         $email = $_POST['email']
    
        // buat query
        $sql = "INSERT INTO comment (nama,comment) VALUE ('$nama','$commend', '$tlp', '$email')";
        $query = mysqli_query($db, $sql);
    
        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header("location: index.php?status=sukses");
            }
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('location: index.php?status=gagal');
        }
?>