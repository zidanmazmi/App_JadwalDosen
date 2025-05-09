<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Mata Kuliah</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Mata kuliah</h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <?php
                include "../db.php";
                $kd_matkul = $_GET['kd_matkul'];
                $db = new db;

                $mhs = $db->get_mtklbykid($kd_matkul);
                $result = $mhs->fetch_array();
                ?>
                <form method="POST" id="formEditMtkl">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" name="kd_matkul" value="<?php echo $result['kd_matkul']; ?> "readonly>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $result['nama']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">SKS</label>
                        <input type="text" class="form-control" name="sks" value="<?php echo $result['sks']; ?>">

                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>

</div>

<!-- Page level plugins -->
<script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="asset/js/demo/datatables-demo.js"></script>