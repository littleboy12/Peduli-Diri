<?php include_once "../_header.php"; ?>

<div class="row">
    <div class="container"> 
        <h5>Data Perjalanan</h5>
        <div class="card P-2">
            <div class="container-fluid">
                <span class="mt-2">Data</span>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Tgl dan Waktu</th>
                                    <th>Tujuan</th>
                                    <th>Suhu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM `tb_data` INNER JOIN tb_pegawai ON tb_data.nik=tb_pegawai.nik") or die (mysqli_error($conn));
                                if (mysqli_num_rows($sql)) {
                                    while ($data = mysqli_fetch_array($sql)) { ?>
                                    
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nik'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['tanggal'] ?> &nbsp; <?= $data['waktu'] ?></td>
                                        <td><?= $data['lokasi'] ?></td>
                                        <td><?= $data['suhu'] ?></td>
                                        <td>
                                            <center>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </center>
                                        </td>

                                    </tr>
                                    
                                    <?php
                                    }
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once "../_footer.php"; ?>