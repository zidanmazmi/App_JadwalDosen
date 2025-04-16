<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Jadwal</h1>
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
                $id = $_GET['id'];
                $db = new db;

                $mhs = $db->get_jdwlbyids($id);
                $result = $mhs->fetch_array();

                $dosenList = $db->get_alldsn(); 
                $matkulList = $db->get_allmtkl();
                ?>
                <form method="POST" id="formEditJdwl" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="number" class="form-control" name="id" value="<?php echo $result['id'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="kd_dosen">Nama Dosen</label>
                        <select class="form-control" name="kd_dosen">
                            <?php while ($dosen = $dosenList->fetch_array()) { ?>
                                <option value="<?= $dosen['kd_dosen'] ?>" <?= $result['kd_dosen'] == $dosen['kd_dosen'] ? 'selected' : '' ?>>
                                    <?= $dosen['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kd_matkul">Nama Matkul</label>
                        <select class="form-control" name="kd_matkul">
                            <?php while ($matkul = $matkulList->fetch_array()) { ?>
                                <option value="<?= $matkul['kd_matkul'] ?>" <?= $result['kd_matkul'] == $matkul['kd_matkul'] ? 'selected' : '' ?>>
                                    <?= $matkul['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input type="time" class="form-control" name="waktu" value="<?php echo $result['waktu'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ruang</label>
                        <input type="text" class="form-control" name="ruang" value="<?php echo $result['ruang'] ?>">
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