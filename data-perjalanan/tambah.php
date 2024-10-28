<?php include_once "../_header.php"; ?>

<div class="row">
    <div class="container">
        <h5>Tambah Data</h5>
        <div class="card mt-3 p-4">
            <span>Tambah data</span>
            <br>
            <br>
            <form method="post" action="proses.php">
                <div class="row">
                    <div class="col-md-2">
                        <span>Nama:</span>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="nama" style="width: 200px;" aria-label="Default select example">
                            <option selected>---</option>
                            <?php
                                $sql = mysqli_query($conn, "SELECT * FROM tb_pegawai") or die (mysqli_error($conn));
                                while ($data = mysqli_fetch_array($sql)) {
                                    echo "<option value='$data[nik]'>$data[nama]</option>";
                                }
                            ?>
                            
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <span>Tanggal:</span>
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="tgl" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <input type="time" name="waktu" class="form-control" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <span>Lokasi:</span>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="lokasi" class="form-control" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <span>Suhu:</span>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="suhu" class="form-control" required>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once "../_footer.php"; ?>