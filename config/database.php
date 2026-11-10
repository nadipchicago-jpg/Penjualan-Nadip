<?php
// config/database.php

$host = 'localhost';
$user = 'root';
$pass = '';
$db	= 'apk_penjualan_ndp';

// Inisialisasi koneksi dengan MySQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);