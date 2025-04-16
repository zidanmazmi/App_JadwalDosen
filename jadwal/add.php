<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Jadwal</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Jadwal</h6>
                        </div>
                        
                        <div class="card-body">
            <div class="table-responsive">

                <?php
                include "../db.php";
                $db = new db;

                $dosenList = $db->get_alldsn(); 
                $matkulList = $db->get_allmtkl();
                ?>

                <form method="POST" id="formJdwl" action="proses_jadwal.php?action=save">
                    <!-- ID bisa dikosongkan jika AUTO_INCREMENT -->
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="number" class="form-control" name="id">
                    </div>

                    <div class="form-group">
                        <label for="kd_dosen">Nama Dosen</label>
                        <select class="form-control" name="kd_dosen" required>
                            <option value="">-- Pilih Dosen --</option>
                            <?php while ($dosen = $dosenList->fetch_array()) { ?>
                                <option value="<?= $dosen['kd_dosen'] ?>">
                                    <?= $dosen['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kd_matkul">Nama Matkul</label>
                        <select class="form-control" name="kd_matkul" required>
                            <option value="">-- Pilih Mata Kuliah --</option>
                            <?php while ($matkul = $matkulList->fetch_array()) { ?>
                                <option value="<?= $matkul['kd_matkul'] ?>">
                                    <?= $matkul['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input type="time" class="form-control" name="waktu" required>
                    </div>

                    <div class="form-group">
                        <label for="ruang">Ruang</label>
                        <input type="text" class="form-control" name="ruang" required>
                    </div>

                    <button type="submit" class="btn btn-primary" id="simpanJdwl">Simpan</button>
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
    

   