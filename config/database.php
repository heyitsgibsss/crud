<?php
// deklarasi parameter koneksi database
$host     = "103.176.78.171";            // server database, default “localhost” atau “127.0.0.1”
$username = "root";                 // username database, default “root”
$password = "Abcd1234@";                     // password database, default kosong
$database = "db_crud_php";          // memilih database yang akan digunakan

// buat koneksi database
$mysqli = new mysqli($host, $username, $password, $database);

// cek koneksi
// jika koneksi gagal 
if ($mysqli->connect_error) {
	// tampilkan pesan gagal koneksi
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}