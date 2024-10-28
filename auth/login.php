<?php

require_once "../_config/config.php"; 
if (isset($_SESSION['user'])) {
    echo "<script>window.location='../beranda/index.php';</script>";
} else { 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Peduli Diri - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../_assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Selamat Datang di Aplikasi Peduli Diri</h1>
                                        <p>Silahkan Isi NIK dan Nama Anda!</p>
                                    </div>
                                    <?php

                                    // proses login
                                    if (isset($_POST['login'])) {
                                        $nik = $_POST['nik'];
                                        $nama = $_POST['nama_lengkap'];

                                        $sql_login = mysqli_query($conn, "SELECT * FROM `tb_admin` WHERE nik = '$nik' AND nama = '$nama'") or die (mysqli_error($conn));

                                        if (mysqli_num_rows($sql_login)) {
                                            $_SESSION ['user'] = $nama;
                                            $_SESSION ['nik'] = $nik;

                                            echo "<script>window.location = '../beranda/beranda.php'</script>";

                                        }
                                    }

                                    ?>

                                    <!-- form Login -->
                                    <form method="post" action="" class="user">
                                        <div class="form-group">
                                            <input name="nik" type="text" class="form-control form-control-user"
                                                id="masukkanNik"
                                                placeholder="Masukkan NIK Anda...">
                                        </div>
                                        <div class="form-group">
                                            <input name="nama_lengkap"type="text" class="form-control form-control-user"
                                                id="masukkanNama" placeholder="Masukkan Nama Anda...">
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                        <a href="Register.php" class="btn btn-info btn-user btn-block">
                                            <i class="fa fa-user fa-fw"></i> Pengguna Baru
                                        </a>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../_assets/vendor/jquery/jquery.min.js"></script>
    <script src="../_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../_assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../_assets/js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
}
?>