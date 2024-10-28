<?php

// settimg timezone
date_default_timezone_set('asia/Jakarta');
session_start();

// koneksi
$conn = mysqli_connect('localhost', 'root', '', 'peduli_diri');
if(mysqli_connect_errno()) {
	echo mysqli_connect_error();
}
?>