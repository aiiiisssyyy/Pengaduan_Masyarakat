<?php
include '../config/koneksi.php';

if(isset($_POST['hapus_tanggapan'])) {
    $id_tanggapan = $_POST['id_tanggapan'];
    $query = mysqli_query($koneksi, "DELETE FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");

    if($query) {
        header('location:index.php?page=tanggapan');
    }

}

if(isset($_POST['hapus_masyarakat'])) {
    $nik = $_POST['nik'];
    $query = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik='$nik'");

    if($query) {
        header('location:index.php?page=masyarakat');
    }

}

if(isset($_POST['hapus_petugas'])) {
    $id_petugas = $_POST['id_petugas'];
    $query = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");

    if($query) {
        header('location:index.php?page=petugas');
    }

}

?>