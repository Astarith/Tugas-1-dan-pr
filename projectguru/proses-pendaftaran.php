<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
    

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $mapel = $_POST['mapel'];
    // Ambil tanggal dari input HTML
    // buat query
    $sql = "INSERT INTO guru (nama,jenis_kelamin, alamat,no_telepon, email,mapel)
     VALUE ('$nama','$jk', '$alamat','$no_telepon','$email','$mapel')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>