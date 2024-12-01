<?php

    if($_POST) {
        $nama_petugas = $_POST['nama_petugas'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level']

        if (empty ($nama_petugas)) {
            echo "<script>alert('Nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        }
        
        else if (empty ($username)) {
            echo "<script>alert('Username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        }

        else if (empty ($password)) {
            echo "<script>alert('Password tidak boleh kosong');location.href='tambah_password.php';</script>";
        }

        else {
            include "connection.php";
            $insert = mysqli_query($conn, "insert into petugas (nama_petugas, username, password, level) value ('".$nama_petugas."', '".$username."', '".md5($password)."', '".$$level."')") or die (mysqli_error($conn));

                if ($insert) {
                    echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
                }

                else {
                    echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
                }
        }
    }
?>