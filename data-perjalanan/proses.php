<?php
require_once "../_config/config.php";

if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $waktu = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];

    $sql_add = mysqli_query($conn, "INSERT INTO `tb_data`(`nik`, `tanggal`, `waktu`, `lokasi`, `suhu`) VALUES ('$nama','$tgl','$waktu','$lokasi','$suhu')") or die (mysqli_query($conn));

    if ($sql_add) {
        echo "<script>window.location = 'data.php'</script>";
    }

}

?>